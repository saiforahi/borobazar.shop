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

Route::get('districts/{division}','DonationController@getdistricts');
Route::get('subdistricts/{district_id}','DonationController@getsubdistricts');
Route::middleware('auth:api')->get('donators/{district}/{bloodGroup}','DonationController@getDonators');
Route::middleware('auth:api')->get('matchedBloodrequests/{size}','BloodRequestController@getRequests');
Route::middleware('auth:api')->get('notifications/{size}','BloodRequestController@getNotifications');
Route::middleware('auth:api')->get('newNotification/{blood_request_id}','BloodRequestController@getNewNotification');
Route::middleware('auth:api')->get('notifications/markread/{notification_id}/{size}','NotificationController@markNotificationAsRead');
Route::get('randomdonars','DonationController@getRandomDonars');

Route::middleware('auth:api')->post('try','UserController@update_secondary_cells');

Route::middleware('auth:api')->prefix('user')->group(function () {
  Route::post('update_details','UserController@update_user_details');
  Route::get('show_details','UserController@show_user_details');
});

Route::prefix('message')->group(function(){
  Route::middleware('auth:api')->post('send','MessageController@sendMessage');
  Route::middleware('auth:api')->post('show','MessageController@showMessages');
  Route::middleware('auth:api')->post('new','MessageController@newMessage');
});


/*
Vue.prototype.$http = Axios;
      const token = localStorage.getItem('token');
      if (token) {
        Vue.prototype.$http.defaults.headers.common['Authorization'] = token
      }
      */