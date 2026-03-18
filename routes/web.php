<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenthihieungan', function () {
    return'Nguyễn Thị Hiếu Ngân';
});
 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/TranHienNhien',function (){
    return 'Trần Hiển Nhiên';
}); 

