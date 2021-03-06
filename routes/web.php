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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'ProfileController@edit');
Route::PATCH('/profile/{user}', 'ProfileController@update');

Route::get('/', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::post('/post', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@show');

Route::post('follow/{user}', 'FollowsController@store');
