<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatpesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');
Route::get('/dashboarduser', [DashboardUserController::class, 'index'])->name('dashboard.userindex')->middleware(['auth', 'verified', 'role:user'])->name('dashboard');

Route::resource('contacts', ContactController::class);

Route::get('/contact', [ContactController::class, 'showClientContact'])->name('client.contact');



Route::resource('komentar', KomentarController::class)->except(['show']);


Route::resource('news', NewsController::class);

Route::resource('menu', MenuController::class);

Route::get('/catatpesanan', [CatatpesananController::class, 'catatpesanan'])->name('catatpesanan.index');

// Route::get('/', function () {
//     return view('index');  // Pastikan index.blade.php ada di dalam folder resources/views
// })->name('ind');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/crudslide', [SlideController::class, 'index'])->name('slides.index');
Route::get('/createslide', [SlideController::class, 'create'])->name('slides.create');
Route::post('/crudslide', [SlideController::class, 'store'])->name('slides.store');
Route::delete('/crudslide/{id}', [SlideController::class, 'destroy'])->name('slides.destroy');
Route::get('/crudslide/{id}/edit', [SlideController::class, 'edit'])->name('slides.edit');
Route::put('/crudslide/{id}', [SlideController::class, 'update'])->name('slides.update');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu.create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');


