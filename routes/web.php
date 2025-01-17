<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatpesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LokasiController;

Route::resource('lokasi', LokasiController::class);


Route::resource('komentar', KomentarController::class)->except(['show']);

Route::get('/', function () {
    return view('index');
});
Route::resource('news', NewsController::class);

Route::resource('menu', MenuController::class);

Route::get('/catatpesanan', [CatatpesananController::class, 'catatpesanan'])->name('catatpesanan.index');

Route::get('/', [SlideController::class, 'home'])->name('home');

// Menampilkan semua slide
Route::get('/crudslide', [SlideController::class, 'index'])->name('slides.index');

// Menampilkan form untuk membuat slide
Route::get('/createslide', [SlideController::class, 'create'])->name('slides.create');

// Menyimpan slide baru
Route::post('/crudslide', [SlideController::class, 'store'])->name('slides.store');

// Menghapus slide
Route::delete('/crudslide/{id}', [SlideController::class, 'destroy'])->name('slides.destroy');

// Menampilkan form untuk edit slide
Route::get('/crudslide/{id}/edit', [SlideController::class, 'edit'])->name('slides.edit');

// Memperbarui slide
Route::put('/crudslide/{id}', [SlideController::class, 'update'])->name('slides.update');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('catatpesanan', CatatpesananController::class);
