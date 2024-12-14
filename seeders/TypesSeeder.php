<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['type_name' => 'Meeting'],
            ['type_name' => 'Bill'],
            ['type_name' => 'Task'],
            ['type_name' => 'Assignment'],
        ];

        for ($i = 0; $i < 250; $i++) { 
            foreach ($types as $type) {
                Type::create($type);
            }
        }
    }
}
