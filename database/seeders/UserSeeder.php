<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        User::create([
            'login' => 'user',
            'password' => Hash::make('user'),
            'role' => 'user'
        ]);

    }
}
