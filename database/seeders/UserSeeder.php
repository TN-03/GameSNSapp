<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'testuser1',
            'email' => 'test1@example.com',
            'password' => Hash::make('password123'),
            'play_start_time' => '21:00',
            'play_end_time' => '24:00',
            'gaming_platform_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
            'name' => 'testuser2',
            'email' => 'test2@example.com',
            'password' => Hash::make('password123'),
            'play_start_time' => '20:00',
            'play_end_time' => '23:00',
            'gaming_platform_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
