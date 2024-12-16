<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodsSeeder extends Seeder
{
    public function run(): void
    {
        $methods = ['Credit Card', 'Bank Transfer', 'COD', 'Cryptocurrency', 'E-Wallet'];

        foreach ($methods as $method) {
            PaymentMethod::create(['name' => $method]);
        }
    }
}
