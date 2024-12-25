<?php

namespace App\Http\Controllers;

use App\Models\Reminder;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil total tagihan yang belum dibayar
        $unpaidTotal = Reminder::sum('reminder_amount');
    
        // Ambil total pembayaran yang sudah dilakukan
        $paidTotal = Reminder::sum('total_paid');
    
        // Ambil semua reminder tanpa limit
        $reminders = Reminder::orderBy('start_date', 'asc')->get();
    
        // Kirim data ke view
        return view('dashboard', compact('unpaidTotal', 'paidTotal', 'reminders'));
    }
}
