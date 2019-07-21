<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['domain'=>'admin.'.env('DOMAIN'),'namespace' => 'Admin'],function () {
	Route::get('/', ['uses'=>"AuthController@index",'as'=>'index']);
	Route::post('/login', ['uses'=>"AuthController@auth",'as'=>'index']);

	Route::group(['prefix'=>'dashboard','as'=>'dashboard.','middleware'=>['auth','web']],function(){
		Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
		Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

		Route::group(['prefix'=>'company','as'=>'company.'],function(){
			Route::get('/',['as'=>'overview','uses'=>'CompanyController@index']);
			Route::get('/{id}',['as'=>'view','uses'=>'CompanyController@view']);
			Route::post('/update',['as'=>'update','uses'=>'CompanyController@updateCommission']);
		});

		//Get option for modal
		Route::get('/getoption/{id}', ['uses'=>"AnswerController@getoptionbyid",'as'=>'getoption']);
		Route::get('/getquestion/{id}', ['uses'=>"QuestionsController@getquestionbyid",'as'=>'question']);

		Route::group(['prefix'=>'questions', 'as'=>'questions.'],function () {
			Route::get('/', ['as' => 'index', 'uses' => 'QuestionsController@overview']);
			Route::get('/create', ['as' => 'create', 'uses' => 'QuestionsController@create']);
			Route::post('/store', ['as' => 'store', 'uses' => 'QuestionsController@store']);
			Route::get('/view/{id}', ['as' => 'view', 'uses' => 'QuestionsController@view']);
			Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'QuestionsController@edit']);
			Route::post('/update', ['as' => 'update', 'uses' => 'QuestionsController@update']);
			Route::post('/delete', ['as' => 'delete', 'uses' => 'QuestionsController@delete']);
		});
		Route::group(['prefix'=>'answer', 'as'=>'answer.'],function () {
			Route::get('/viewOption/{id}', ['as' => 'edit', 'uses' => 'AnswerController@view']);
			Route::post('/store/', ['as' => 'store', 'uses' => 'AnswerController@store']);
			Route::post('/delete/', ['as' => 'delete', 'uses' => 'AnswerController@delete']);
			Route::post('/update/', ['as' => 'update', 'uses' => 'AnswerController@update']);
		});

		Route::group(['prefix'=>'exam', 'as'=>'exam.'],function () {
			Route::get('/', ['as' => 'setting', 'uses' => 'ExamController@setting']);
			Route::post('/update', ['as' => 'setting.update', 'uses' => 'ExamController@settingUpdate']);
			Route::get('/noticeview', ['as' => 'notice', 'uses' => 'ExamController@notice']);
			Route::get('/noticeEdit', ['as' => 'notice.edit', 'uses' => 'ExamController@noticeEdit']);
			Route::post('/noticeUpdate', ['as' => 'notice.update', 'uses' => 'ExamController@noticeUpdate']);
		});
		Route::group(['prefix'=>'user', 'as'=>'user.'],function () {
			Route::get('/', ['as' => 'index', 'uses' => 'ExamController@index']);
			Route::get('/review/{user_id}', ['as' => 'review', 'uses' => 'ExamController@review']);
			Route::post('/retake', ['as' => 'retake', 'uses' => 'ExamController@retake']);
		});
	});
});



Route::group(['namespace' => 'User'],function () {
	Route::get('/', ['uses'=>"AuthController@index",'as'=>'index']);
	Route::post('/login', ['uses'=>"AuthController@auth"]);

	Route::group(['prefix'=>'user', 'as' => 'user.'],function(){
		Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);
		Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

		Route::group(['prefix'=>'exam', 'as' => 'exam.'],function(){
			Route::get('/', ['as' => 'index', 'uses' => 'ExamRecordController@overview']);
			Route::get('/test/{question_no}', ['as' => 'question', 'uses' => 'ExamRecordController@exam']);
			Route::post('/test', ['as' => 'update', 'uses' => 'ExamRecordController@updateanswer']);
			Route::get('/summary', ['as' => 'summary', 'uses' => 'ExamRecordController@summary']);
			Route::get('/finalize', ['as' => 'finalize', 'uses' => 'ExamRecordController@finalize']);
		});
	});
});
