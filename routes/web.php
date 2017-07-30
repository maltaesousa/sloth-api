<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();
