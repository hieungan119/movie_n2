<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dangphuongnghi', function () {
    return "Đặng Phương Nghi";
});
