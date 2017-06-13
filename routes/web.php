<?php

Route::get('/', function () {
    return view('index');
});

Route::resource('api/users', 'UserController');
Route::resource('api/locations', 'LocationController');
Route::resource('api/reservations', 'ReservationController');
Route::resource('api/resources', 'ResourceController');
