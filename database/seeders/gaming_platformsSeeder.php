<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gaming_platformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gaming_platforms')->insert([
           'platform' => 'PC',
        ]);

        DB::table('gaming_platforms')->insert([
            'platform' => 'PS4',
        ]);

        DB::table('gaming_platforms')->insert([
            'platform' => 'PS5',
        ]);

        DB::table('gaming_platforms')->insert([
            'platform' => 'Switch',
        ]);

        
    }
}
