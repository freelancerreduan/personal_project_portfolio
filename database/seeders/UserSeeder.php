<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Default Admin
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin@gmail.com'),
                'role' => 'admin',
            ]
        );

        // Default User
        User::firstOrCreate(
            ['email' => 'reduan360bd@gmail.com'],
            [
                'name' => 'Default User',
                'password' => Hash::make('reduan360bd@gmail.com'),
                'role' => 'user',
            ]
        );
    }
}
