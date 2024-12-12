<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
            Category::insert([
                ['category_type' => 'game'],
                ['category_type' => 'household'],
                ['category_type' => 'water'],
                ['category_type' => 'electric'],
                ['category_type' => 'entertainment'],
            ]);
    
    }
}
