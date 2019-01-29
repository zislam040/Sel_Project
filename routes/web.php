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



Route::get('/', 'ProjectController@index')->name('home');
Route::get('/userreport', 'ProjectController@userreport')->name('userreport');
Route::get('/department', 'ProjectController@department')->name('department');
Route::get('/register', 'ProjectController@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
