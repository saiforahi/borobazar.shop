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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'PagesController@bloodDonation')->name('home');
Route::post('/','PagesController@donatorSearch')->name('blood-donation')->middleware('auth');
Route::get('/blood_request','PagesController@showBloodRequestSubmit')->name('blood_request');
Route::post('/blood_request','BloodRequestController@store')->name('blood_request_submit');
Route::get('/blood_requests','PagesController@bloodRequests')->name('blood_requests')->middleware('auth');
Route::get('/blood_donation/info','PagesController@essentialInfo')->name('essentialInfo'); //blood donation essential information page's route
Route::get('profile','PagesController@showProfile')->name('profile')->middleware('auth');

