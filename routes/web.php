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



Route::group(['namespace' => 'Admin'],function () {
	Route::get('/', ['uses'=>"AuthController@index",'as'=>'index']);
	Route::post('/login', ['uses'=>"AuthController@auth",'as'=>'index']);

	Route::group(['prefix'=>'dashboard', 'as'=>'dashboard.'],function(){
		Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
		Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);

		Route::group(['prefix'=>'income','as'=>'income.'],function(){

			Route::group(['prefix'=>'invoice','as'=>'invoice.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@invoiceIndex']);
				Route::get('/add',['as'=>'add','uses'=>'IncomeController@invoiceAdd']);
			});

			Route::group(['prefix'=>'revenue','as'=>'revenue.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@revenueIndex']);
				Route::get('/add',['as'=>'add','uses'=>'IncomeController@revenueAdd']);
			});

			Route::group(['prefix'=>'customer','as'=>'customer.'],function(){
				Route::get('/',['as'=>'index','uses'=>'IncomeController@customerIndex']);
				Route::get('/add',['as'=>'add','uses'=>'IncomeController@customerAdd']);
			});

		});

		Route::group(['prefix'=>'expenses','as'=>'expenses.'],function(){

			Route::group(['prefix'=>'bill','as'=>'bill.'],function(){
				Route::get('/',['as'=>'index','uses'=>'ExpensesController@billIndex']);
				Route::get('/add',['as'=>'add','uses'=>'ExpensesController@billAdd']);
			});

			Route::group(['prefix'=>'payment','as'=>'payment.'],function(){
				Route::get('/',['as'=>'index','uses'=>'ExpensesController@paymentIndex']);
				Route::get('/add',['as'=>'add','uses'=>'ExpensesController@paymentadd']);
			});

			Route::group(['prefix'=>'vendor','as'=>'vendor.'],function(){
				Route::get('/',['as'=>'index','uses'=>'ExpensesController@vendorIndex']);
				Route::get('/add',['as'=>'add','uses'=>'ExpensesController@vendorAdd']);
			});

		});

		Route::group(['prefix'=>'module','as'=>'module.'],function(){
			Route::get('/',['as'=>'index','uses'=>'ModuleController@moduleIndex']);
			Route::get('/add',['as'=>'add','uses'=>'ModuleController@moduleAdd']);
		});

	});
});
