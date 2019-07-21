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

	Route::group(['prefix'=>'dashboard', 'as'=>'dashboard.'],function(){
		Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
		Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

		Route::group(['prefix'=>'income','as'=>'income.'],function(){

			Route::group(['prefix'=>'invoice','as'=>'invoice.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@invoiceIndex']);
			});

			Route::group(['prefix'=>'revenue','as'=>'revenue.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@revenueIndex']);
			});

			Route::group(['prefix'=>'customer','as'=>'customer.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@customerIndex']);
			});

		});

		Route::group(['prefix'=>'expenses','as'=>'expenses.'],function(){

			Route::group(['prefix'=>'invoice','as'=>'invoice.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@invoiceIndex']);
			});

			Route::group(['prefix'=>'revenue','as'=>'revenue.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@revenueIndex']);
			});

			Route::group(['prefix'=>'customer','as'=>'customer.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@customerIndex']);
			});

		});

	});
});
