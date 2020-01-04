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
Route::get('/', 'masterController@index')->name('home');
Route::get('/new', 'masterController@create')->name('new');
Route::post('/new', 'masterController@store');
Route::get('/delete/{id}', 'masterController@destroy')->name('delete');
Route::get('/edit/{id}', 'masterController@edit')->name('edit');
Route::post('/edit/{id}', 'masterController@update')->name('update');
Route::get('/show/{id}', 'masterController@show')->name('show');

