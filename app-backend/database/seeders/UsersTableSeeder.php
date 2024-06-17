<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstName' => 'Admin',
            'lastName' => 'User',
            'password' => Hash::make('password'),
            'email' => 'admin@example.com',
            'address' => '123st',
            'phone' => '1234567890',
            'register_date' => now(),
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'password' => Hash::make('password'),
            'email' => 'John@example.com',
            'address' => '123st',
            'phone' => '1234567891',
            'register_date' => now(),
        ]);
    }
}
