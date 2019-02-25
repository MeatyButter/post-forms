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
    if( Auth::user()){
    	return redirect('home');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create')->name('create');
Route::post('/create', 'PostController@store');
Route::get('/post/{post}/update', 'PostController@edit');
Route::post('/post/{post}/update', 'PostController@update');
Route::delete('/post/{post}/delete', 'PostController@delete');

Route::post('/profile', 'ProfileController@update');
