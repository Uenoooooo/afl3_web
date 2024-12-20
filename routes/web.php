<?php

use App\Http\Controllers\logincontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Reminder;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/bill', function () {
    return view('bill');
});

Route::get('/kalender', function () {
    return view('kalender');
});

Route::resource("/User", UserController::class);


Route::get('/bill', [ReminderController::class, 'index']);

Route::get('/reminders/events', [ReminderController::class, 'getCalendarEvents']);


Route::get('/login', function () {
    return view('login'); // Halaman login
})->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register'); // Halaman registrasi
})->name('register.form');

Route::post('/register', [logincontroller::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile/{id}', [UserController::class, 'updateProfile'])->name('profile.update');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
