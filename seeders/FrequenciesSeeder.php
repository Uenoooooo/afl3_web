<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frequency;
use Illuminate\Support\Facades\DB;

class FrequenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Frequency::insert([
            ['frequency_id'=>1, 'frequency_name' => 'one_time'],
            ['frequency_id'=>2, 'frequency_name' => 'daily'],
            ['frequency_id'=>3, 'frequency_name' => 'weekly'],
            ['frequency_id'=>4, 'frequency_name' => 'monthly'],
            ['frequency_id'=>5, 'frequency_name' => 'yearly'],
        ]);
    }
}
