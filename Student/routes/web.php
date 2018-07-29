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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/create','StudentController@create');
Route::post('user/create','StudentController@store');

Route::get('user', 'StudentController@index');

Route::get('user/{id}/edit', 'StudentController@edit');
Route::post('user/update', 'StudentController@update');

Route::get('user/{id}/delete', 'StudentController@delete');


