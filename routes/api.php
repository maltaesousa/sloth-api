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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});
*/
/*
Route::post('login', 'LoginController@login');
Route::post('login', 'LoginController@refresh');

Route::post('logout', 'LoginController@logout');
*/

Route::group(['namespace' => 'Api'], function () {
    Route::post('/login', 'UserController@login');
});

Route::resource('/users', 'UserController');
Route::resource('/locations', 'LocationController');
Route::resource('/reservations', 'ReservationController');
Route::resource('/resources', 'ResourceController');
