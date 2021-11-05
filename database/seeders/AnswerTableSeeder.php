<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1,
                'contents' => '応援団総部吹奏楽団',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 1,
                'contents' => 'ヨット部',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 1,
                'contents' => 'アメリカンフットボール部',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 1,
                'contents' => '競技ダンス部',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 2,
                'contents' => 'フットサル部SOCIO',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 2,
                'contents' => '競技ダンス部',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 2,
                'contents' => 'ウェイトトレーニング部',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 2,
                'contents' => 'チアリーダーWIZARDS',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 3,
                'contents' => '第一武道館',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 3,
                'contents' => '第二武道館',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 3,
                'contents' => '教育学部体育棟',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 3,
                'contents' => '清水記念体育館',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 4,
                'contents' => 'コール・ロータス',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 4,
                'contents' => 'グリークラブ',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 4,
                'contents' => 'ユースホステルクラブ',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 4,
                'contents' => '文芸ペンクラブ',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 5,
                'contents' => 'Canva',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 5,
                'contents' => 'Final Cut Pro',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 5,
                'contents' => 'Photoshop',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 5,
                'contents' => 'illustrator',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 6,
                'contents' => '詩吟',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 6,
                'contents' => '剣詩舞',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 6,
                'contents' => '円舞',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 6,
                'contents' => '構成吟',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 7,
                'contents' => 'アーモンド',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 7,
                'contents' => '煮物',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 7,
                'contents' => 'マスカット',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 7,
                'contents' => '栗の甘露煮',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 8,
                'contents' => 'ピーチユニオン前',
                'is_correct' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 8,
                'contents' => '本部棟会議室',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 8,
                'contents' => '農学部棟横イチョウ並木',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question_id' => 8,
                'contents' => '岡山大学図書館前',
                'is_correct' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
