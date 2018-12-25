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

Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);

Route::get('/comments', ['as' => 'comments', 'uses' => 'CommentsController@index']);
Route::post('/comment/store', ['as' => 'comments.store', 'uses' => 'CommentsController@store']);
Route::get('/comment/{comment}/delete', ['as' => 'comments.delete', 'uses' => 'CommentsController@delete']);