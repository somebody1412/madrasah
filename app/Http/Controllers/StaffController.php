<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Record;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Auth;

class StaffController extends Controller
{
    public function student()
    {
        $user = Auth::user();
        $students = Student::all();
        return view('page.pelajar.view',compact('user','students'));
    }

    public function studentExam($id)
    {
        $user = Auth::user();
        $exams = Record::with('exam')->where('student_id',$id)->select('exam_id')->groupBy('exam_id')->get();
        $student_id = $id;
        return view('page.exam.view',compact('user','exams','student_id'));
    }

    public function studentExamAdd($id,Request $request)
    {
        $user = Auth::user();
        $student_id = $id;
        $exams = Exam::with('subject')->get();
        $subjects = collect([]);

        if($request->get('exam') != null){
            $subjects = Subject::where('exam_id',$request->get('exam'))->get();
        }   

        return view('page.exam.add',compact('user','exams','subjects','student_id'));
    }

    public function studentExamStore(Request $request)
    {
        foreach($request->subject as $key => $subject){
            $record = new Record;
            $record->subject_id = $key;
            $record->mark = $request->mark[$key];
            $record->student_id = $request->id;
            $record->exam_id = $request->exam;
            $record->save();
        }
        
        return redirect('/staff/pelajar/exam/'.$request->id)->with('success',"Exam successfully recorded");
    }


    public function studentExamSubject($id,$student_id, Request $request)
    {
        $user = Auth::user();

        $student_id = $id;
        $exams = Exam::with('subject')->get();
        $subjects = collect([]);

        if($request->get('exam') != null){
            $subjects = Subject::where('exam_id',$request->get('exam'))->get();
        }   

        $records = Record::with('exam','subject')->where('student_id',$student_id)->where('exam_id',$id)->get();

        return view('page.exam.edit',compact('user','exams','subjects','records','student_id'));
        
    }

    public function studentExamSubjectUpdate(Request $request)
    {
        // dd($request->all());

        foreach($request->subject as $key => $subject){
            $record = Record::where('id',$key)->first();
            $record->mark = $request->mark[$key];
            $record->save();
        }
        
        return redirect('/staff/pelajar/exam/'.$request->id)->with('success',"Exam successfully recorded");
    }

    public function exam()
    {
        $user = Auth::user();
        $exams = Exam::all();
        return view('page.test.view',compact('user','exams'));
    }

    public function examAdd()
    {
        $user = Auth::user();
        return view('page.test.add',compact('user'));
    }

    public function examStore(Request $request)
    {
        $user = Auth::user();
        $exam = new Exam;
        $exam->name = $request->exam;
        $exam->year = $request->year;
        $exam->save();

        return redirect('/staff/exam')->with('success',"Exam successfully recorded");
    }

    public function examSubject(Request $request)
    {
        $user = Auth::user();
        $subjects = Subject::where('exam_id',$request->exam)->get();
        $exam_id = $request->exam;
        return view('page.subject.view',compact('user','subjects','exam_id'));
    }

    public function examSubjectAdd(Request $request)
    {
        $user = Auth::user();
        $subjects = Subject::where('exam_id',$request->exam)->get();
        $exam_id = $request->exam;
        return view('page.subject.add',compact('user','subjects','exam_id'));
    }

    public function examSubjectStore(Request $request)
    {
        $user = Auth::user();
        $exam = new Subject;
        $exam->name = $request->subject;
        $exam->exam_id = $request->exam;
        $exam->save();

        return redirect('/staff/exam/subject?exam='.$request->exam)->with('success',"Subject successfully recorded");
    }

    
}
