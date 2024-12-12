<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{

public function run(): void
        {
            Payment::create([
                'payment_amount' => 75000, 
                'payment_date' => now(), 
                'payment_method' => 'Cash', 
                'image' => 'image_path.jpg', 
                'amount' => 75000, 
            ]);
            
        DB::table('payments')->insert([
            'payment_amount' => 50000, 
            'payment_date' => now(), 
            'payment_method' => 'Credit', 
            'image' => 'image_image.jpg', 
            'amount' => 50000, 
        ]);
    }
}

