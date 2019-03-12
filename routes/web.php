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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/landing', 'HomeController@landing')->name('index');


Route::get('/explore', 'ExploreController@index')->name('explore');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/{id}', 'ProfileController@byId');


Route::resource('post', 'PostController');

Auth::routes();

