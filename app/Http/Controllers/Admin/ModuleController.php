<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Module;

class ModuleController extends Controller
{
    public function moduleIndex(){
		$modules = Module::all();
		return view('page.admin.module.view',compact('modules'));
	}

    public function moduleAdd(){

		return view('page.admin.module.add');
	}
	
	public function moduleStore(Request $request){

		$this->validate($request, [
			'course' => 'required',
			'title' => 'required',
			'description' => 'required',
			'file' => 'required',
			]);
			
			try {
				$fileName = 'File'.time().'.'.request()->file->getClientOriginalExtension();
				$path = 'storage/module/' . $fileName;
				
				//upload image to server
				request()->file->move(public_path('storage/module/'), $fileName);
				
			} catch (Exception $e) {
				return redirect()->back()->with('error','File cant upload');
			}
		$module = new Module;
		$module->course = $request->course;
		$module->title = $request->title;
		$module->description = $request->description;
		$module->file_url = $path;
		$module->save();
		return redirect()->back()->with('success','File successfully uploaded');
	}
	
    public function moduleEdit($id){
		$module = Module::find($id);
		return view('page.admin.module.edit',compact('module'));
	}

	public function moduleUpdate(Request $request){
		
		$this->validate($request, [
			'course' => 'required',
			'title' => 'required',
			'description' => 'required',
			]);
		
		$module = Module::find($request->id);

		if(!$module){
			return redirect()->back()->with('error','Module not available');
		}

		if($request->hasFile('image')) {
			try {
				$fileName = 'File'.time().'.'.request()->file->getClientOriginalExtension();
				$path = 'storage/module/' . $fileName;
				
				//upload image to server
				request()->file->move(public_path('storage/module/'), $fileName);
				$module->file_url = $path;
			} catch (Exception $e) {
				return redirect()->back()->with('error','File cant upload');
			}
		}

		$module->course = $request->course;
		$module->title = $request->title;
		$module->description = $request->description;
		
		$module->save();

		return redirect()->back()->with('success','File successfully updated');
	}

	public function moduleDelete(Request $request){

		$module = Module::find($request->id);
		if(!$module){
			return redirect()->back()->with('error','Module not available');
		}

		$module->delete();

		return redirect()->back()->with('success','File successfully deleted');

	}
}
