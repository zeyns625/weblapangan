<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ListLapanganController;

Route::get('/listlapangan', [ListLapanganController::class, 'show']);
Route::post('/listlapangan', [ListLapanganController::class, 'simpan'])->name('lapangan.simpan');
