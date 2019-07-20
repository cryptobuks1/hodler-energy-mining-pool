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
    return view('landing');
});
Route::view('/welcome', 'starter')->name('starter');
Route::view('pools', 'pools')->name('pools');
Route::view('network', 'network')->name('network');
Route::view('altilly', 'altilly')->name('altilly');
Route::view('hodlerenergy', 'hodlerenergy')->name('hodlerenergy');

