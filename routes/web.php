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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/main','MainController@main')->name('main');
Route::get('show','HomeController@show')->name('show');
Route::get('create','HomeController@create')->name('create');
Route::post('store','HomeController@store')->name('store');


