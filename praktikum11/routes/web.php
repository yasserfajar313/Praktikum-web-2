<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']); // Route untuk Pegawai
Route::get('/admin/pasien', [PasienController::class, 'index']);
Route::get('/admin/periksa', [PeriksaController::class, 'index']);
