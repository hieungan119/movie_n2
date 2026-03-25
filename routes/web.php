<?php
use Illuminate\Support\Facades\Route;
Route::get('/genres','App\Http\Controllers\GenresController@listGenres');
Route::get('/book','App\Http\Controllers\BookController@listBooks');

