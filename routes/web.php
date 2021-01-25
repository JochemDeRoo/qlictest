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

Route::group(['middleware' => 'auth', 'prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', 'BlogController@index')->name('index');
    Route::get('/create', 'BlogController@create')->name('create');
    Route::post('/store', 'BlogController@store')->name('store');
    Route::get('/update', 'BlogController@update')->name('update');
    Route::get('/delete', 'BlogController@update')->name('delete');
});
