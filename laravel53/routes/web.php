<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.angular');
});


// angular
Route::get('/apj/angular/{id?}','AngularController@index');
Route::post('/apj/angular','AngularController@store');
Route::post('/apj/angular/update{id}','AngularController@update');
Route::get('/apj/angular/delete/{id}','AngularController@destroy');

Route::get('search/autocomplete','MedicinController@autoComplete');
Route::get('search/get-info','MedicinController@get_all');
Route::get('/login','LoginController@index');

Route::post('/check-login','LoginController@check_login');


Route::get('/getall','StudentController@index');
Route::get('/getbyid/{id}','StudentController@show');
Route::get('/deletebyid/{id}','StudentController@delete');


 Route::group(['middleware'=>'checkuser'],function(){
	Route::get('/date','SuperAdminController@index');
	Route::get('/form','FormController@index');
	Route::post('/store','FormController@store');
	Route::get('/ajax','AjaxController@index');
	Route::post('/save-personal-info','AjaxController@save_info');
	Route::get('/logout','SuperAdminController@logout');
 });
