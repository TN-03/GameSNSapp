<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'game_id' =>1,
            'role_name' => 'デュエリスト',
        ]);

        DB::table('roles')->insert([
            'game_id' =>1,
            'role_name' => 'イニシエーター',
        ]);

        DB::table('roles')->insert([
            'game_id' =>1,
            'role_name' => 'コントローラー',
        ]);

        DB::table('roles')->insert([
            'game_id' =>1,
            'role_name' => 'センチネル',
        ]);

        DB::table('roles')->insert([
            'game_id' =>2,
            'role_name' => 'アサルト',
        ]);

        DB::table('roles')->insert([
            'game_id' =>2,
            'role_name' => 'スカーミッシャー',
        ]);

        DB::table('roles')->insert([
            'game_id' =>2,
            'role_name' => 'リコン',
        ]);

        DB::table('roles')->insert([
            'game_id' =>2,
            'role_name' => 'コントローラー',
        ]);

        DB::table('roles')->insert([
            'game_id' =>2,
            'role_name' => 'サポート',
        ]);

        DB::table('roles')->insert([
            'game_id' =>3,
            'role_name' => 'タンク',
        ]);

        DB::table('roles')->insert([
            'game_id' =>3,
            'role_name' => 'ダメージ',
        ]);

        DB::table('roles')->insert([
            'game_id' =>3,
            'role_name' => 'サポート',
        ]);
    }
}
