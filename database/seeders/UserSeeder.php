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
            'play_timezone' => '21:00~24:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
            'name' => 'testuser2',
            'email' => 'test2@example.com',
            'password' => Hash::make('password123'),
            'play_timezone' => '20:00~23:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
