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

//Route::prefix('cloths')->group(function () {
//    Route::get('users', function () {
//        // Matches The "/admin/users" URL
//    });
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
