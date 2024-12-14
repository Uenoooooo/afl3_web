<?php

use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/home/editprofile', function () {
    $userData = [
        'full_name' => 'John Doe',
        'username' => 'johndoe123',
        'phone_number' => '081234567890',
        'address' => '123 Main Street',
        'email' => 'johndoe@example.com',
    ];
    return view('editprofile', compact('userData'));
});

Route::post('/home/updatedprofile', function () {
    $updatedData = [
        'full_name' => request('full_name'),
        'username' => request('username'),
        'phone_number' => request('phone_number'),
        'address' => request('address'),
        'email' => request('email'),
    ];
    return view('updatedProfile', compact('updatedData'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home/updatedprofile', function () {
    return redirect('/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/bill', function () {
    return view('bill');
});

Route::get('/kalender', function () {
    return view('kalender');
});

Route::middleware('auth')->get('/home', function () {
    return view('home');
});


Route::get('login', [Logincontroller::class, 'showLoginForm'])->name('login');
Route::post('login', [Logincontroller::class, 'login']);
Route::get('register', [Logincontroller::class, 'showRegistrationForm'])->name('register');
Route::post('register', [Logincontroller::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');