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
// --------------------------------Basic ---------------------------------------------
Route::get('/', 'PagesController@getwelcome'); //
Route::get('/contact', 'PagesController@getContact'); //
Route::get('/about', 'PagesController@getAbout'); //
Route::get('/home', 'PagesController@getIndex'); //
//------------------------------------------------------------------------------------
Route::resource('post','PostsController');
Auth::routes();


