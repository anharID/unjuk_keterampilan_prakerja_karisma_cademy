<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now()
            ]
        );
        User::create(
            [
                'name' => 'Editor',
                'email' => 'editor@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'editor',
                'email_verified_at' => now()
            ]
        );
        User::create(
            [
                'name' => 'User Biasa',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'email_verified_at' => now()
            ]
        );
    }
}
