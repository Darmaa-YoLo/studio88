<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/', 'AppController@home');
Route::get('/index','AppController@index');
Route::get('/contact', 'AppController@contact');
Route::get('/about', 'AppController@about');
Route::get('/portfolio', 'AppController@portfolio');
Route::get('img/{path}', 'ImageController@render')->where('path', '.*');
Route::get('video/{path}', 'VideoController@render')->where('path', '.*');


