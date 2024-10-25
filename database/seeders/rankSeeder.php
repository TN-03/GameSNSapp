<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'アイアン'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'ブロンズ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'シルバー'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'ゴールド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'プラチナ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'ダイヤモンド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'アセンダント'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'イモータル'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 1,
            'rank_name' => 'レディアント'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'ルーキー'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'ブロンズ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'シルバー'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'ゴールド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'プラチナ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'ダイヤモンド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'マスター'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 2,
            'rank_name' => 'プレデター'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'ブロンズ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'シルバー'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'ゴールド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'プラチナ'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'ダイヤモンド'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'マスター'
        ]);

        DB::table('ranks')->insert([
            'game_id' => 3,
            'rank_name' => 'グランドマスター'
        ]);
    }
}
