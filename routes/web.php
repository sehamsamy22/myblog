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

Route::get('/', "postController@index");
Route::post('/post/add',"postController@addpost");
Route::get('/edit/{id}',"postController@editpost");
Route::get('/delete/{id}',"postController@deletepost");
Route::get('/post/add',"postController@toaddpost");
Route::post('/save/{id}',"postController@save");
Route::post('/edit/{id}',"postController@edit");
Route::get('/posts/{id?}',"postController@getPost");

Route::post('/comment/post/{id}',"CommentController@store");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
