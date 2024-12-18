<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// buat route baru yang menggunakan controller | by Ahmad Istakim
Route::get('/ruteController', [SiswaController::class, 'index']);


// route menggunakan with
Route::get('/withSiswa', [SiswaController::class, 'index']);


//menggunakan array
Route::get('/arraySiswa', [SiswaController::class, 'indexArray']);