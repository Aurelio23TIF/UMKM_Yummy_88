<?php

use App\Http\Controllers\ProfileController;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Livewire\ContactForm;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('menu', MenuController::class);

Route::get('/menus', [MenuController::class, 'clientView'])->name('menu.client');

Route::get('/menu-lengkap', [MenuController::class, 'menuLengkap'])->name('menu.lengkap');

Route::resource('contacts', ContactController::class);

Route::get('/contact', [ContactController::class, 'showClientContact'])->name('client.contact');


