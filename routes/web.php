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


/**
 * Init
 */
Auth::routes(['verify' => true]);

/**
 * Public
 */
Route::get('/', function () {
    return view('public/welcome');
});

Route::get('/docs', function() {
    return view('public/docs');
});

Route::get('/news', function() {
    return view('public/news');
});

/**
 * Home Page
 */
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


