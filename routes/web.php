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

Route::get('/dashboard',"TestController@dashboard")->middleware('auth');;
Route::get('/charts',"TestController@charts")->middleware('auth');;
Route::get('/login',"TestController@login");
Route::get('/register',"TestController@register");
Route::get('/user',"TestController@index")->name('user')->middleware('auth');;
Route::get('/',"TestController@hello");

Route::post('/register',"TestController@store");
Route::post('/user',"TestController@update")->name('user');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Auth::routes();

Route::post('/home', 'HomeController@insert');
