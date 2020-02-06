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


Route::get('/', ['as'=>'web', 'uses'=>'WebController@index']);
Route::get('/feature', ['as'=>'feature', 'uses'=>'WebController@feature']);
Route::get('/elearning', ['as'=>'elearning', 'uses'=>'WebController@elearning']);
Route::get('/register', ['as'=>'register', 'uses'=>'WebController@register']);

Route::get('/login', ['uses'=>"AuthController@index",'as'=>'index']);
Route::post('/login', ['uses'=>"AuthController@auth",'as'=>'index']);

Route::get('/register', ['uses'=>"AuthController@indexRegister"]);
Route::post('/register', ['uses'=>"AuthController@register"]);

Route::get('/dashboard', ['as'=>'home', 'uses'=>'DashboardController@index'])->middleware('auth');
Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------\
*/

//pelajar
Route::get('/user/pelajar', ['as'=>'user.pelajar', 'uses'=>'ParentController@student'])->middleware('auth');
Route::get('/user/pelajar/add', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentAdd'])->middleware('auth');
Route::post('/user/pelajar/store', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentStore'])->middleware('auth');
Route::get('/user/pelajar/edit/{id}', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentEdit'])->middleware('auth');
Route::post('/user/pelajar/update', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentUpdate'])->middleware('auth');

//exam
Route::get('/user/pelajar/exam/{id}', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentExam'])->middleware('auth');

//subject
Route::get('/user/pelajar/exam/subject/{id}/{student_id}', ['as'=>'user.pelajar', 'uses'=>'ParentController@studentExamSubject'])->middleware('auth');

//penjaga
Route::get('/user/penjaga', ['as'=>'user.pelajar', 'uses'=>'ParentController@penjaga'])->middleware('auth');
Route::get('/user/penjaga/add', ['as'=>'user.pelajar', 'uses'=>'ParentController@penjagaAdd'])->middleware('auth');
Route::get('/user/penjaga/edit/{id}', ['as'=>'user.pelajar', 'uses'=>'ParentController@penjagaEdit'])->middleware('auth');
Route::post('/user/penjaga/store', ['as'=>'user.pelajar', 'uses'=>'ParentController@penjagaStore'])->middleware('auth');
Route::post('/user/penjaga/update', ['as'=>'user.pelajar', 'uses'=>'ParentController@penjagaUpdate'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Staff Routes
|--------------------------------------------------------------------------\
*/

Route::get('/staff/pelajar', ['as'=>'user.pelajar', 'uses'=>'StaffController@student'])->middleware('auth');

//exam
Route::get('/staff/pelajar/exam/{id}', ['as'=>'user.pelajar', 'uses'=>'StaffController@studentExam'])->middleware('auth');
Route::get('/staff/pelajar/exam/add/{id}', ['as'=>'user.pelajar', 'uses'=>'StaffController@studentExamAdd'])->middleware('auth');
Route::post('/staff/pelajar/exam/store', ['as'=>'user.pelajar', 'uses'=>'StaffController@studentExamStore'])->middleware('auth');
Route::post('/staff/pelajar/exam/update', ['as'=>'user.pelajar', 'uses'=>'StaffController@studentExamSubjectUpdate'])->middleware('auth');

//subject
Route::get('/staff/pelajar/exam/subject/{id}/{student_id}', ['as'=>'user.pelajar', 'uses'=>'StaffController@studentExamSubject'])->middleware('auth');
