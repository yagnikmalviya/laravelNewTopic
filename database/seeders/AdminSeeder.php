<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yagnik Malviya',
            'email' => 'yagnik.technocomet@gmail.com',
            'user_role' => 'admin',
            'password' => Hash::make('12345678'),
            ]);
    }
}
