<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/profile', 'UserController@details');
});

/*
Route::group(['namespace' => 'Api'], function () {
    Route::post('/login', 'UserController@login');
});
*/
Route::post('/login', 'UserController@login');
Route::resource('/users', 'UserController');
Route::resource('/locations', 'LocationController');
Route::resource('/reservations', 'ReservationController');
Route::resource('/resources', 'ResourceController');
