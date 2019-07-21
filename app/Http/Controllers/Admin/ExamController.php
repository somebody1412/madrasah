<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\ExamRecord;
use App\Models\User;
use App\Models\UserExamStatus;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
	public function setting(){
		$exam = Exam::first();

		//exam duration
		$time = sprintf("%02d%s%02d%s%02d", floor($exam->exam_duration/3600), ':', ($exam->exam_duration/60)%60, ':', $exam->exam_duration%60);

		$split = explode(':', $time,3);
		$hours = $split[0];
		$minutes = $split[1];
		$seconds = $split[2];

		$question = Question::all()->count();
		return view('page.admin.exam.exam.setting',compact('exam','question','hours','minutes','seconds'));
	}

	public function notice(){
		$exam = Exam::first();
		return view('page.admin.exam.exam.notice',compact('exam'));
	}

	public function noticeEdit(){
		$exam = Exam::first();
		return view('page.admin.exam.exam.noticeEdit',compact('exam'));
	}

	public function noticeUpdate(Request $request){
		$exam = Exam::first();
		$exam->exam_description = $request->exam_description;
		$exam->save();
		return redirect()->route('dashboard.exam.notice')->with('success','Successfully Edit Exam Details');
	}

	public function settingUpdate(Request $request){
		$exam = Exam::first();

    	//validate total question
		if ($request->exam > Question::all()->count() || $request->exam < 0) {
			return redirect()->back()->with('err','Total Exam Questions Must Within Total Bank Questions');
		}

		$exam->total_question = $request->exam;
		$exam->save() ;

		if ($request->question > Exam::first()->total_question || $request->question < 0) {
			return redirect()->back()->with('err','Pass score Must Within Exam Question');
		}
		//second formula
		$second = ($request->duration_second + $request->duration_minute * 60 + $request->duration_hour * 3600);
		$exam->exam_duration = $second;
		$exam->pass_question = $request->question;
		$exam->save() ;

		return redirect()->back()->with('success','Exam Successfully Updated');
	}

	public function index(){
		$users = DB::table('users')
            ->join('exam_records', 'users.id', '=', 'exam_records.user_id')
            ->select('users.id','users.nric','users.name','users.exam_status_id',DB::raw('COUNT(exam_records.id) as question'),DB::raw('SUM(exam_records.correct) as correct '))
            ->groupBy('users.id')
            ->get();
    	return view('page.admin.exam.review.index',compact('users'));
    }

    public function review($user_id = 0){
		$exams = ExamRecord::with('examRecord_Question','examRecord_Question.question_answer')->where('user_id',$user_id)->orderBy('id', 'asc')->get();
    	return view('page.admin.exam.review.review',compact('exams'));
    }

    public function retake(Request $request){
		$user =  User::find($request->id);
		$user->exam_status_id = UserExamStatus::FAIL_REOPEN;
		$user->save();
    	return redirect()->back()->with('success','Candidate Successfully Retake');
    }
}
