<?php

use Illuminate\Support\Facades\Route;
use App\Models\Reminder;
use App\Http\Controllers\ReminderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/bill', function () {
    return view('bill');
});

Route::get('/kalender', function () {
    return view('kalender');
});


Route::get('/bill', [ReminderController::class, 'index']);

Route::get('/reminders/events', [ReminderController::class, 'getCalendarEvents']);
