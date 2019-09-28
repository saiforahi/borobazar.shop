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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/blood-donation','PagesController@bloodDonation')->name('blood-donation')->middleware('auth');
Route::get('/blood_request','PagesController@bloodRequest')->name('blood_request');
