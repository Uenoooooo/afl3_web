<?php

use Illuminate\Support\Facades\Route;

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
