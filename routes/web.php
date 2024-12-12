<?php

use App\Http\Controllers\ProfileController;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Livewire\ContactForm;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('menu', MenuController::class)->only(['index','create','store','edit','destroy','update']);


Route::get('/contact', ContactForm::class)->name('contact');
