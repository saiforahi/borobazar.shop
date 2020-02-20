<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register','AuthController@register')->name('apiregister');
Route::post('login','AuthController@login')->name('apilogin');

Route::get('blood_groups','DonationController@getBloodGroups');  //blood_group fetcher
Route::get('districts/{division}','DonationController@getdistricts');  //district fetcher
Route::get('subdistricts/{district_id}','DonationController@getsubdistricts');  //subdistrict fetcher

Route::get('donators/{district}/{bloodGroup}','DonationController@getDonators')->middleware('auth:api');
Route::middleware('auth:api')->get('matchedBloodrequests/{size}','BloodRequestController@getRequests');
Route::middleware('auth:api')->get('notifications/{size}','BloodRequestController@getNotifications');
Route::middleware('auth:api')->get('newNotification/{blood_request_id}','BloodRequestController@getNewNotification');
Route::middleware('auth:api')->get('notifications/markread/{notification_id}/{size}','NotificationController@markNotificationAsRead');
Route::middleware('auth:api')->prefix('blood_request_notifications')->group(function(){
  Route::post('markallread','BloodRequestController@markallread');
});
Route::get('randomdonars','DonationController@getRandomDonars');

Route::middleware('auth:api')->post('try','UserController@update_secondary_cells');

Route::middleware('auth:api')->prefix('user')->group(function () {
  Route::post('update_details','UserController@update_user_details');
  Route::get('show_details','UserController@show_user_details');
  Route::get('show_address','UserController@show_user_address');
  Route::post('update_address','UserController@update_user_address');
  Route::get('show_donar_info','UserController@show_donar_info');
  Route::post('update_donar_info','UserController@update_donar_info');
});

Route::middleware('auth:api')->prefix('message')->group(function(){
  Route::post('send','MessageController@sendMessage');
  Route::get('show/{size}','MessageController@getMessages');
  Route::post('new/{message_id}','MessageController@newMessage');
  Route::post('markread','MessageController@mark_message_as_read');
});

Route::middleware('auth:api')->prefix('blood_requests')->group(function(){
  Route::get('getmyrequests/{size}','BloodRequestController@my_requests');
  Route::post('delete_my_request','BloodRequestController@delete_request');
  Route::post('send_my_response','DonationController@send_response');
  Route::get('responsed_donars/{blood_request_id}','BloodRequestController@getResponsedDonars');
  Route::post('mark_as_completed','BloodRequestController@mark_as_completed');
  //Route::get('getmyrequests/old','BloodRequestController@my_requests');
});

Route::middleware('auth:api')->prefix('blood_service')->group(function(){
  Route::get('show_donar_details/{id}','UserController@show_donar_details');
});


/*
Vue.prototype.$http = Axios;
      const token = localStorage.getItem('token');
      if (token) {
        Vue.prototype.$http.defaults.headers.common['Authorization'] = token
      }
      */