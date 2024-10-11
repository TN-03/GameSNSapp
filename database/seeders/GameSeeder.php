<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            'title' => 'VALORANT',
            'genre' => 'FPS',
            'body' => '『VALORANT』は、Riot Gamesが開発した5対5の戦術的FPSゲームです。
                        プレイヤーは「エージェント」と呼ばれる個性的なキャラクターを操作し、各エージェントには固有のアビリティが用意されています。
                        ゲームは攻撃と防衛に分かれ、攻撃側は爆弾「スパイク」の設置を目指し、防衛側はそれを阻止します。精密な射撃スキルに加え、アビリティを駆使したチームプレイが求められ、戦略性が重視されるゲームです。
                        日本国内でも人気が高く、eスポーツシーンでも注目されています。',
        ]);

        DB::table('games')->insert([
            'title' => 'APEX Legends',
            'genre' => 'FPS',
            'body' => '『APEX Legends』は、Respawn Entertainmentが開発した無料プレイのバトルロイヤル型FPSゲームです。
                        プレイヤーは「レジェンド」と呼ばれるキャラクターを選び、それぞれ固有のアビリティを活用しながらチーム戦を展開します。
                        最大60人が3人一組のチームで広大なマップに降下し、最後の生き残りを目指して戦います。
                        高速な移動、戦略的なポジショニング、チームプレイが重要な要素で、ユニークなキャラクター性と緊張感のある戦闘で多くのファンを魅了しています。',
        ]);
    }
}
