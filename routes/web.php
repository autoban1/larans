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




    Route::get('cars/create', 'BackendController@cars_create')->name('cars.create');

    Route::post('cars/store', 'BackendController@cars_store')->name('cars.store');

    Route::get('cars/index', 'BackendController@cars_index')->name('cars.index');

    Route::delete('cars/destroy/{car}', 'BackendController@cars_destroy')->name('cars.destroy');

    Route::get('cars/edit/{car}', 'BackendController@cars_edit')->name('cars.edit');

    Route::patch('cars/{car}', 'BackendController@cars_update')->name('cars.update');

    Route::get('cars/show/{car}', 'BackendController@cars_show')->name('cars.show');




    Route::get('/probica', function () {
        return view('probica');
    });
});