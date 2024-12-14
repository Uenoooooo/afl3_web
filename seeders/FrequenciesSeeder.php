<?php

namespace Database\Seeders;

use App\Models\Frequency;
use Illuminate\Database\Seeder;

class FrequenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frequencies = [
            ['frequency_name' => 'One_Time'],
            ['frequency_name' => 'Daily'],
            ['frequency_name' => 'Weekly'],
            ['frequency_name' => 'Monthly'],
            ['frequency_name' => 'Yearly'],
        ];

        for ($i = 0; $i < 200; $i++) { 
            foreach ($frequencies as $frequency) {
                Frequency::create($frequency);
            }
        }
    }
}
