<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'full_name' => 'Superuser',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'joined_date' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}