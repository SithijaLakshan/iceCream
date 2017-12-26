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
// --------------------------------Basic---------------------------------------------
Route::get('/', 'PagesController@getwelcome'); //
Route::get('/contact', 'PagesController@getContact'); //
Route::get('/about', 'PagesController@getAbout'); //
Route::get('/home', 'PostsController@Index'); //
//----------------------------------Posts---------------------------------------------
Route::resource('post','PostsController');//
Route::get('/like/{id}', 'PostsController@add_like');
Route::get('/unlike/{id}', 'PostsController@del_like');
//---------------------------------Auth-----------------------------------------------
Auth::routes();//
//------------------------------------------------------------------------------------


