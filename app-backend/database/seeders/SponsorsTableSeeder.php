<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sponsors')->insert([
            'user_id' => 1,
            'cat_id' => 1,
            'payment_amount' => 100,
            'start_date' => now(),
            'end_date' => now()->addMonth(), // One month from now.
            ]);
        }
    }
