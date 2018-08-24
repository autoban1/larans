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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/onama', function () {
    return view('o_nama');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});



Route::get('/admin', 'AdminController@index');



Route::group(['middleware'=>'auth'], function() {

    Route::resource('categories', 'CategoryController');

    Route::resource('cartags', 'CartagController');

    Route::get('/probica', function () {
        return view('probica');
    });
});