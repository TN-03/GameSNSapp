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

        DB::table('games')->insert([
            'title' => 'Over Watch2',
            'genre' => 'FPS',
            'body' => '『Overwatch 2』は、Blizzard Entertainmentが開発したチームベースのヒーローシューティングゲームです。
                        プレイヤーは「ヒーロー」と呼ばれるキャラクターを選び、それぞれの固有の能力を駆使して6対6のチーム戦を繰り広げます。
                        目的に応じたマップで、攻撃や防衛を行いながらチームで協力し勝利を目指します。
                        ヒーローたちの多様な能力と役割が戦略性を生み、スピーディーかつ緊張感のある対戦が特徴です。',
        ]);

        DB::table('games')->insert([
            'title' => 'Escape from Tarkov',
            'genre' => 'FPS',
            'body' => '『Escape from Tarkov』は、Battlestate Gamesが開発したハードコアなサバイバルFPSゲームです。
                        プレイヤーは架空のロシア都市「タルコフ」で、他のプレイヤーやAI敵と戦いながら物資を集め、脱出を目指します。
                        リアル志向の戦闘システムと複雑な装備管理が特徴で、銃撃戦だけでなく、探索や取引が生存のカギとなります。
                        緊張感あふれる戦闘と高い難易度で、リアルなサバイバル体験を提供し、多くのファンに支持されています。',
        ]);

        
    }
}
