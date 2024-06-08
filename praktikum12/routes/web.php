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
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');