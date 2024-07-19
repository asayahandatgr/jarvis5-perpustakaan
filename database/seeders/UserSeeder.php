<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_ADMIN  
        ]);

        User::create([
            'name' => 'Tegar',
            'email' => 'tegar@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => User::ROLE_ADMIN  
        ]);

        User::create([
            'name' => 'Tegar',
            'email' => 'tegarasayahanda@gmail.com',
            'password' => Hash::make('tegar123'),
            'role' => User::ROLE_ADMIN  
        ]);

        User::create([
            'name' => 'Aldi Mahardiansyah',
            'email' => 'aldimahardiansyah@gmail.com',
            'password' => Hash::make('aldi123'),
            'role' => User::ROLE_ADMIN  
        ]);

        User::create([
            'name' => 'Abdullah Al Wafi',
            'email' => 'abdullahalwafi@gmail.com',
            'password' => Hash::make('wafi123'),
            'role' => User::ROLE_ADMIN  
        ]);

        User::create([
            'name' => 'Muhammad Ammar',
            'email' => 'muhammadammar@gmail.com',
            'password' => Hash::make('ammar123'),
            'role' => User::ROLE_ADMIN  
        ]);
    }
}
