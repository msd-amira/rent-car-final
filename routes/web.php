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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/cardetail', 'LoginController@cardetail')->name('cardetail');
Route::get('/cars', 'CarsController@index')->name('cars');
Route::get('/contact', 'LoginController@contact')->name('contact');