<?php

namespace Database\Seeders;

use App\Models\Reminder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemindersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Reminder::create([
            'user_id' => 1,
            'type_id' => 1,
            'frequency_id' => 1,
            'reminder_name' => 'Welkin Pass',
            'reminder_desc' => 'Ini isinya hutang Welkin',
            'reminder_amount' => 75000,
            'start_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'frequency_details' => json_encode(['detail1', 'detail2']),

        ]);

    
    }
    
}