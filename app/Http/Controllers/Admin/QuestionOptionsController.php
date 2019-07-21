<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionOptions;
use App\Models\Question;

class QuestionOptionsController extends Controller
{
    public function view($id){
		$options = QuestionOptions::where('question_id',$id)->orderBy('created_at','DESC')->get();
		$question = Question::find($id);
		return view('page.admin.exam.answer.view',compact('options','id','question'));
	}

	public function store(Request $request){
		$option = new QuestionOptions;
		$option->question_id = $request->id;
		$option->option = $request->option;
		$option->option = $request->option;
		$option->correct = (($request->answer)?true:false);
		$option->save();
		return redirect()->back()->with('success','Option Successfully Created');
	}

	public function delete(Request $request){
		$option = QuestionOptions::find($request->optionid);
		$option->delete();
		return redirect()->back()->with('success','Option Successfully Deleted');
	}

	public function update(Request $request){
		$option = QuestionOptions::find($request->id);
		$option->option = $request->option;
		$option->correct = (($request->answer)?true:false);
		$option->save();
		return redirect()->back()->with('success','Option Successfully Updated');
	}

	public function getoptionbyid($id){
		$option = QuestionOptions::find($id);
		return response()->json($option, 200);
	}
}
