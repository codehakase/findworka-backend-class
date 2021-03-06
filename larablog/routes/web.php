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

Route::get('/', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/post/new', 'PostController@new');
Route::post('/posts', 'PostController@save');

Route::get('/users/:id', 'UserController@show');
