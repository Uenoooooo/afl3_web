<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kelvinadadadadad',
            'email' => "kmarcelladadadadao@gmail.com",
            'phonenumber' => '082336002222227731',
            'password' => '123222222245'
        ]);

        DB::table('users')->insert([
            ['user_id' => 1]
        ]);
    }
}
