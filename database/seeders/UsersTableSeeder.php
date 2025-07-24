<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder
     User::create([
     'name' => 'Admin',
     'email' => 'admin@example.com',
     'password' => bcrypt('password'),
     'role' => 'admin',
    ]);

     User::create([
     'name' => 'User Biasa',
     'email' => 'user@example.com',
     'password' => bcrypt('password'),
     'role' => 'user',
    ]);

    }
}
