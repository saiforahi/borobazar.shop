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

Route::get('/', 'PagesController@show_home')->name('home');
Route::get('/dashboard','PagesController@show_dash')->name('dashboard')->middleware('auth');
Route::get('/blood_request','PagesController@showBloodRequestSubmit')->name('blood_request')->middleware('auth');
Route::post('/blood_request','BloodRequestController@store')->name('blood_request_submit')->middleware('auth');
Route::get('/blood_requests','PagesController@bloodRequests')->name('blood_requests')->middleware('auth');
Route::get('/blood_donation/info','PagesController@essentialInfo')->name('essentialInfo'); //blood donation essential information page's route
Route::get('profile','PagesController@showProfile')->name('profile')->middleware('auth');
Route::get('secureques','PagesController@showQuestions')->name('resetQuestions');
Route::post('secureques','PagesController@submit_answers')->name('submit_answers')->middleware('verify.answers');
Route::post('resetpassword/{cell}','PagesController@passwordReset')->name('password_reset');
Route::get('blood/submitted_requests','PagesController@showMyRequests')->name('submitted_requests')->middleware('auth');


Route::middleware('auth')->prefix('blood_donation')->group(function(){
    Route::get('home','PagesController@bloodDonation')->name('blood-donation');
    Route::post('submit_request','BloodRequestController@store')->name('submit_blood_request');
    Route::get('donar_info','PagesController@donar_info')->name('donar_info');
});

Route::prefix('tutor_service')->group(function(){
    Route::get('home','PagesController@tutorHome')->name('tutor-home');
    Route::get('registration','PagesController@tutorRegistration')->name('tutor-register');
});