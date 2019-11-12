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

//Ir a la vista costumer desde la URL
Route::get('/searchresult', function () {
    return view('layouts/searchresult');
});

Route::get('/publicationdetail', function () {
    return view('layouts/publicationdetail');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/cart', function () {
    return view('layouts/cart');
});