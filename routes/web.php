<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Models\Reminder;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/reminders', [ReminderController::class, 'index'])->name('reminders.index');

Route::get('/bill', function () {
    return view('bill');
});

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/payment', [PaymentController::class, 'show']);

Route::resource("/User", UserController::class);

Route::resource('/reminders', ReminderController::class);

Route::get('/bill', [ReminderController::class, 'index']);

Route::get('/reminders/events', [ReminderController::class, 'getCalendarEvents']);

Route::get('/login', function () {
    return view('login'); // Login page
})->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('register'); // Registration page
})->name('register.form');

Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::put('/profile/{id}', [UserController::class, 'updateProfile'])->name('profile.update');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Payment routes
Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
Route::post('/payment/{id}', [PaymentController::class, 'pay'])->name('payment.pay');
