<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function view($id){
		$options = Answer::where('question_id',$id)->orderBy('created_at','DESC')->get();
		$question = Question::find($id);
		return view('page.admin.exam.answer.view',compact('options','id','question'));
	}

	public function store(Request $request){
		$option = new Answer;
		$option->question_id = $request->id;
		$option->option = $request->option;
		$option->option = $request->option;
		$option->correct = (($request->answer)?true:false);
		$option->save();
		return redirect()->back()->with('success','Option Successfully Created');
	}

	public function delete(Request $request){
		$option = Answer::find($request->optionid);
		$option->delete();
		return redirect()->back()->with('success','Option Successfully Deleted');
	}

	public function update(Request $request){
		$option = Answer::find($request->id);
		$option->option = $request->option;
		$option->correct = (($request->answer)?true:false);
		$option->save();
		return redirect()->back()->with('success','Option Successfully Updated');
	}

	public function getoptionbyid($id){
		$option = Answer::find($id);
		return response()->json($option, 200);
	}
}
