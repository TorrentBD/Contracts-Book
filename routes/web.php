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

Route::post('/add', 'HomeController@add')->name('add');

Route::get('/view/{id}', 'HomeController@view')->name('view');

Route::get('/delete/{id}', 'HomeController@delete')->name('delete');

Route::get('/update/{id}','HomeController@update')->name('update');

 Route::get('/contract','HomeController@create')->name('contract');

 



 



