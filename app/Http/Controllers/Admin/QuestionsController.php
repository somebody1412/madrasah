<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionOptions;

class QuestionsController extends Controller
{
	public function overview(){
		$questions = Question::with('question_answer')->orderBy('created_at','DESC')->get();
		return view('page.admin.exam.question.index',compact('questions'));
	}

	public function create(){
		return view('page.admin.exam.question.create');
	}

	public function store(Request $request){
		//validate make sure answer not null
		$counter = 0;
		foreach ($request->option as $option) {
			if ($request->answer == ($counter+++1) && !$option) {
				return redirect()->back()->with('err','Answer cannot empty');
			}
		}
		//save question
		$question = new Question;
		$question->question = $request->question;
		$question->save();
		$i = 1;
		//save option
		foreach ($request->option as $option) {
			$options = new QuestionOptions;
			$options->question_id = $question->id;
			if ($option) {
				$options->option = $option;
			}else{
				$i++;
				continue;
			}

			$options->correct = ($request->answer == $i++ ? true : false);
			$options->save();
		}
		return redirect()->back()->with('success','Question Successfully Created');
	}

	public function view($id){
		$question = Question::with('question_answer')->where('id',$id)->first();
		return view('page.admin.exam.question.view',compact('question'));
	}

	public function edit($id){
		$question = Question::with('question_answer')->where('id',$id)->first();
		return view('page.admin.exam.question.edit',compact('question','id'));
	}

	public function update(Request $request){

		$question = Question::with('question_answer')->where('id',$request->id)->first();
		$question->question = $request->question;
		$question->save();

		return redirect()->back()->with('success','Question Successfully Updated');
	}

	public function delete(Request $request){

		$question = Question::find($request->questionid);
		$question->question_answer()->delete();
		$question->delete();

		return redirect()->back()->with('success','Question Successfully Deleted');
	}

	public function getquestionbyid($id){
		$question = Question::find($id);
		return response()->json($question, 200);
	}
}
