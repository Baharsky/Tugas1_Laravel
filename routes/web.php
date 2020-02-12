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

 Route::get('/stisla', function () {
     return view('index');
 });

//route CRUD
Route::get('/','WisatawanController@index');

Route::get('/create','WisatawanController@create');

Route::post('/wisatawan','WisatawanController@store');

//delete
Route::get('/delete/{id}','WisatawanController@delete');
//update
Route::get('/update/{id}','WisatawanController@update');
Route::post('/updateStore/{id}','WisatawanController@updateStore');

Route::get('/search','WisatawanController@search');

