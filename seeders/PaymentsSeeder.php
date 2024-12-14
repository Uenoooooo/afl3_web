<?php

namespace Database\Seeders;

use App\Models\Frequency;
use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            ['payment_method' => 'Credit_Card'],
            ['payment_method' => 'Bank_Transfer'],
            ['payment_method' => 'COD'],
            ['payment_method' => 'Cryptocurrency'],
            ['payment_method' => 'E-Wallet'],
        ];

        for ($i = 0; $i < 200; $i++) { 
            foreach ($payments as $payment) {
                Payment::create($payment);
            }
        }
    }
}
