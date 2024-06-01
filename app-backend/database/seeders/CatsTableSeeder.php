<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('cats')->insert([
                'cat_name' => 'Fluffy',
                'cat_color' => 'White',
                'cat_description' => 'Friendly lil fella, very fluffy.',
                'good_cat_status' => true,
            ]);
    }
}
