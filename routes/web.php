<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/nguyenthihieungan', function () {
    return'Nguyễn Thị Hiếu Ngân';
});

Route::get('/tranhiennhien',function () {
    return 'Trần Hiển Nhiên';
}); 

Route::get('/dangphuongnghi', function () {
    return "Đặng Phương Nghi";
});

Route::get('/nguyenleminhnhu', function () {
    return "Nguyễn Lê Minh Như";
});
Route::get('/huynhthiquynhnhu', function () {
    return 'Huỳnh Thị Quỳnh Như';
});

Route::get("/topbudget","App\Http\Controllers\BudgetController@topbudget");