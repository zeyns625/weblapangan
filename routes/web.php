<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListLapanganController;

Route::get('/listlapangan', [ListLapanganController::class, 'show']);
