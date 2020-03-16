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


Route::get('/', 'LandingController@index');

//login,logout,reg
Route::get('logout', 'UserController@logout');
Route::post('/postlogin','UserController@postlogin');
Route::get('/login','UserController@login')->name('login');
Route::post('/register','UserController@register');

Route::group(['middleware' => ['auth','cekRole:1']], function(){
	Route::get('/dashboard', 'WisatawanController@index');
	//delete
	Route::get('/delete/{id}','WisatawanController@delete');
	//update
	Route::get('/update/{id}','WisatawanController@update');
	Route::post('/updateStore/{id}','WisatawanController@updateStore');
	Route::get('/search','WisatawanController@search');
	//excel
	Route::get('/dashboard/export_excel', 'WisatawanController@export_excel');

	Route::get('/home', 'HomeController@index')->name('home');
	//create
	Route::get('/create','WisatawanController@create');
	Route::post('/wisatawan','WisatawanController@store');


	//pariwisata
	Route::get('/pariwisata', 'PariwisataController@index');
	Route::get('/createpar','PariwisataController@create');
	Route::post('/storepar','PariwisataController@store');
	//update pariwisata
	Route::get('/updatepar/{id}','PariwisataController@update');
	Route::post('/updateStore/{id}','PariwisataController@updateStore');
	//delete
	Route::get('/delete/{id}','PariwisataController@delete');
	//create
	Route::get('/pariwisata/export_excel', 'PariwisataController@export_excel');
});

