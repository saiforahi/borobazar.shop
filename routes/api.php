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

Route::get('districts','DonationController@getdistricts');
Route::get('subdistricts/{district}','DonationController@getsubdistricts');
Route::get('donators/{district}/{bloodGroup}','DonationController@getDonators');
Route::get('bloodrequests/{district}/{bloodGroup}/{cell}','BloodRequestController@getRequests');


/*
Vue.prototype.$http = Axios;
      const token = localStorage.getItem('token');
      if (token) {
        Vue.prototype.$http.defaults.headers.common['Authorization'] = token
      }
      */