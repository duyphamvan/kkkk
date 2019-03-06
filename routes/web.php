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
Route::get('index', 'BookController@index')->name('index');
Route::get('show/{id}', 'BookController@show')->name('show');
Route::get('create', 'BookController@create')->name('create');
Route::post('store', 'BookController@store')->name('store');
Route::get('edit/{id}', 'BookController@edit')->name('edit');
Route::post('update/{id}', 'BookController@update')->name('update');
Route::get('delete/{id}', 'BookController@destroy')->name('delete');
