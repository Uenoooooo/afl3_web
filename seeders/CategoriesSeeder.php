<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_type' => 'Expense'],
            ['category_type' => 'Investment'],
            ['category_type' => 'Saving'],
            ['category_type' => 'Loan'],
            ['category_type' => 'Debt'],
        ];

        for ($i = 0; $i < 200; $i++) { 
            foreach ($categories as $category) {
                Category::create($category);
            }
        }
    }
}
