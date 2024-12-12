<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jadikan Array
        // Tipe ini ada Meeting, Task, Bill, dll
        DB::table('types')->insert([
            ['type_id' => 1,'type_name' => 'Task']
        ]);
    }
}
