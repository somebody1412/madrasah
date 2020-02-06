<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Record;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ParentController extends Controller
{
    public function student()
    {
        $user = Auth::user();
        $students = Student::where('parent_id',$user->id)->get();
        return view('page.pelajar.view',compact('user','students'));
    }

    public function studentAdd()
    {
        $user = Auth::user();
        $students = Student::where('parent_id',$user->id)->get();
        return view('page.pelajar.add',compact('user','students'));
    }

    public function studentEdit($id)
    {
        $user = Auth::user();
        $student = Student::where('parent_id',$user->id)->where('id',$id)->first();
        return view('page.pelajar.edit',compact('user','student'));
    }

    public function studentStore(Request $request)
    {
        $student = Student::where('nric',$request->nric)->first();
        
        if($student){
            return redirect()->back()->with('err',"Student already existed");
        }

        $student = new Student;
        $student->parent_id = Auth::id();
        $student->nama_penuh = $request->nama_penuh;
        $student->tarikh_lahir = $request->tarikh_lahir;
        $student->nric = $request->nric;
        $student->sijil_lahir = $request->sijil_lahir;
        $student->no_passport = $request->passport;
        $student->warganegara = $request->warganegara;
        $student->kaum = $request->kaum;
        $student->agama = $request->agama;
        $student->anak_ke_berapa = $request->anak_ke_berapa;
        $student->status_murid = $request->status_murid;
        $student->alamat_tetap = $request->alamat;
        $student->tarikh_daftar = Carbon::now();
        $student->save();

        return redirect('/user/pelajar')->with('success',"Student successfully registered");
    }

    public function studentUpdate(Request $request)
    {
        $student = Student::where('nric',$request->nric)->where('id','!=',$request->id)->first();
        
        if($student){
            return redirect()->back()->with('err',"Ic already used");
        }

        $student = Student::where('id',$request->id)->where('parent_id',Auth::id())->first();
        $student->parent_id = Auth::id();
        $student->nama_penuh = $request->nama_penuh;
        $student->tarikh_lahir = $request->tarikh_lahir;
        $student->nric = $request->nric;
        $student->sijil_lahir = $request->sijil_lahir;
        $student->no_passport = $request->passport;
        $student->warganegara = $request->warganegara;
        $student->kaum = $request->kaum;
        $student->agama = $request->agama;
        $student->anak_ke_berapa = $request->anak_ke_berapa;
        $student->status_murid = $request->status_murid;
        $student->alamat_tetap = $request->alamat;
        $student->tarikh_daftar = Carbon::now();

        $student->save();

        return redirect('/user/pelajar')->with('success',"Student successfully updated");
    }

    public function studentExam($id)
    {
        $user = Auth::user();
        $exams = Record::with('exam')->where('student_id',$id)->select('exam_id')->groupBy('exam_id')->get();
        $student_id = $id;

        return view('page.exam.view',compact('user','exams','student_id'));
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

}
