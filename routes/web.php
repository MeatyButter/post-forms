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
// Route::get('/posts/{post}', 'PostsController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');
Route::delete('/post/{post}/delete', 'PostController@delete');
