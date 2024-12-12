<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatpesananController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('catatpesanan', CatatpesananController::class);
