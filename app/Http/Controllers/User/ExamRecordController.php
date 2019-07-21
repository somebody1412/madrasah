<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\ExamRecord;
use App\Models\Question;
use App\Models\User;
use App\Models\UserExamStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExamRecordController extends Controller
{
	public function exam($question_no = 1){
		$exam = Exam::first();
		$number = $question_no;

		//auto default login 1st user
		$user = User::first();
		Auth::login($user, false);

		//check status if user allow to take exam
		if (!(Auth::user()->exam_status_id == UserExamStatus::FAIL_FRESH || Auth::user()->exam_status_id == UserExamStatus::FAIL_REOPEN || Auth::user()->exam_status_id == UserExamStatus::FAIL_INEXAM) ) {
			return redirect()->route('user.exam.index')->with('err','You dont have access to take this exam');
		}

		//check if valid to create question
		if (Auth::user()->exam_status_id != UserExamStatus::FAIL_INEXAM) {
			//random order question
			$randQuestions = collect(Arr::random(range(0, (Question::all()->count() - 1)),  Exam::first()->total_question))
			->map(function($i){
				return Question::skip($i)->first();
			});

			//if question already exist in database
			if (ExamRecord::where('user_id',Auth::id())->count() > 0 ) {
				//delete existing question
				ExamRecord::where('user_id',Auth::id())->delete();
			}

			//save new question
			foreach($randQuestions as $value){
				$record = new ExamRecord;
				$record->user_id = Auth::id();
				$record->question_id = $value->id;
				$record->save();
			}
			//update status to taking exam
			$user = User::find(Auth::id());
			$user->exam_status_id =  UserExamStatus::FAIL_INEXAM;
			$user->save();
		}

		$question_no -= 1;
		//get one question each page
		$question = ExamRecord::with('examRecord_Question','examRecord_Question.question_answer')->where('user_id',Auth::id())->orderBy('created_at', 'asc')->orderBy('id', 'asc')->skip($question_no)->first();
		//pagination with highlight
		$pages = ExamRecord::where('user_id',Auth::id())->select('answer_id')->orderBy('created_at', 'asc')->orderBy('id', 'asc')->get();
		//get time left
		$timeelapsed = Carbon::now()->diffInSeconds($question->created_at);
		//in second
		$timeleft = ($exam->exam_duration - $timeelapsed);
		if ($timeleft < -5) {
			return redirect('/user/exam/finalize');
		}
		return view('page.user.exam.exam',compact('question','number','exam','pages','timeleft'));
	}

	public function overview(){
		$exam = Exam::first();
		return view('user::exam.index',compact('exam'));
	}

	public function summary(){
		$exam = Exam::first();
		$counter = 1;
		$records = ExamRecord::with('examRecord_Question','examRecord_Question.question_answer')->where('user_id',Auth::id())->orderBy('created_at', 'asc')->orderBy('id', 'asc')->get();
		return view('page.user.exam.summary',compact('records','counter'));
	}

	public function finalize(){
		$exam = Exam::first();
		$records = ExamRecord::with('examRecord_Question','examRecord_Question.question_answer')->where('user_id',Auth::id())->orderBy('created_at', 'asc')->orderBy('id', 'asc')->get();
		foreach($records as $record){
		    /** @var ExamRecord $record */
			foreach ($record->examRecord_Question->question_answer as $value) {
				if( $record->answer_id == $value->id && $value->correct){
					$record->correct = true;
					$record->save();
				}
			}
			if ($record->correct) {
				$record->examRecord_Question->increment('correct');
			}else
				$record->examRecord_Question->increment('wrong');
		}
		$passmark = ExamRecord::with('examRecord_Question','examRecord_Question.question_answer')->where('user_id',Auth::id())->select(DB::raw('count(*) as total'))
		->groupBy('correct')->where('correct',true)
		->first();
		$user = User::find(Auth::id());

		if (!$passmark) {
			$total=0;
			$user->exam_status_id =	UserExamStatus::FAIL_FAIL;
		}
		elseif ($passmark->total < $exam->pass_question ) {
			$total=$passmark->total;
			$user->exam_status_id =	UserExamStatus::FAIL_FAIL;
		}else{
			$user->exam_status_id =	UserExamStatus::PASS_PASS;
		}
		$user->save();

		return view('page.user.exam.finalize',compact('total','exam'));
	}

	public function updateanswer(Request $request){
		$number = $request->number;
		$exam = Exam::first();
		if (Auth::user()->exam_status_id == UserExamStatus::FAIL_INEXAM) {
			$update = ExamRecord::where('id',$request->id)->where('user_id',Auth::id())->first();
			if($update){
				$update->answer_id = $request->answer;
				$update->save();
			}
			if ($number == $exam->total_question) {
				return redirect()->route('user.exam.summary');
			}
			$number++;
		}
		return redirect()->route('user.exam.question',$number);
	}
}
