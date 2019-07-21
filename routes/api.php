<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

//upload wysiwyg
Route::post('/upload_image', function() {
	$CKEditor = Input::get('CKEditor');
	$funcNum = Input::get('CKEditorFuncNum');
	$message = $url = '';
	if (Input::hasFile('upload')) {
		$file = Input::file('upload');
		if ($file->isValid()) {
			$filename = $file->getClientOriginalName();
			$path = Storage::disk('public')->put("images",$file);
			// $file->move(storage_path().'/images/', $filename);
			$url = env('APP_URL').'/uploads/'.$path;//'/uploads/images/' . $filename;
		} else {
			$message = 'An error occured while uploading the file.';
		}
	} else {
		$message = 'No file uploaded.';
	}
	return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
});