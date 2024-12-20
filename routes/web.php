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


Route::resource('menu', MenuController::class)->only(['index','create','store','edit','destroy','update']);

Route::resource('contacts', ContactController::class);

Route::get('/contact', [ContactController::class, 'showClientContact'])->name('client.contact');

Route::get('/test-mail', function () {
    Mail::to('recipient@example.com')->send(new TestMail('Ini adalah email pengujian menggunakan Mailtrap!'));
    return 'Email telah dikirim!';
});
