<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an Admin user
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@lifelink.com',
            'password' => Hash::make('password'),
            'phone' => '1234567890',
            'blood_group' => 'O+',
            'gender' => 'male',
            'age' => 30,
            'city' => 'Admin City',
            'address' => 'Admin HQ',
            'role' => 'admin',
        ]);

        // Create a regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@lifelink.com',
            'password' => Hash::make('password'),
            'phone' => '0987654321',
            'blood_group' => 'A+',
            'gender' => 'female',
            'age' => 25,
            'city' => 'User City',
            'address' => 'User Home',
            'role' => 'user',
        ]);
    }
}
