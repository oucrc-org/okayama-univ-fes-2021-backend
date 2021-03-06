<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'stamp_id' => 1,
                'quiz' => '「コロナ対策応援団」では様々な部活が登場し、その団体ごとの感染症対策を紹介しています。その中で「水分補給時の個人ボトルの作成」や「給水時のゴム手袋着用」といった取り組みを紹介している部活の名前を答えてください。',
                'hint' => '「団体企画」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-09'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 2,
                'quiz' => '男女がペアとなり、数種類ある曲に合わせて様々なステップを踏んで一体となって、その表現や動きの美しさを競います。ほぼ全員が大学から始める競技であり、部員の中には全国で上位に入るような人もでます。<br>この部活の名前を答えてください。',
                'hint' => '「部活動・サークル紹介」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-10'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 3,
                'quiz' => '岡山大学には創部50周年を超える「少林寺拳法部」が存在します。では、少林寺拳法部の活動場所は以下のうち どこでしょうか？',
                'hint' => '「部活動・サークル紹介」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-11'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 4,
                'quiz' => '1961年に結成された団体。その数年後には、合唱コンクールで全国3位の成績をおさめるまでに急成長し、現在20名の部員を持つ公認男声合唱チームを答えてください。',
                'hint' => '「部活動・サークル紹介」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-12'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 5,
                'quiz' => 'フリーペーパー「NUTS」を年に4回作成・配布している、キャンパスマガジンNUTS編集部。では、その際に用いられるソフトは？',
                'hint' => '「部活動・サークル紹介」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-13'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 6,
                'quiz' => '部員36名（男子: 23名、女子: 13名）という大人数の吟詩部。では、以下のうち、吟詩部の活動に含まれていないものは？',
                'hint' => '「部活動・サークル紹介」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-14'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 7,
                'quiz' => '昨年に引き続き、今年度も美術部によるオンライン美術展が開催されています。水彩画・アクリル画・油絵・色鉛筆画・水彩色鉛筆画・立体作品などさまざまな作品が展示されていますが、立体作品の中で制作されていない作品はどれでしょう？',
                'hint' => '「団体企画」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-15'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'stamp_id' => 8,
                'quiz' => '特設Webサイトに掲載している「学長メッセージ」、「校友会代表者メッセージ」、「大学祭実行委員会委員長」メッセージはそれぞれ別々の場所で撮影されました。<br>選択肢の中で3つメッセージ動画の撮影場所<b>ではない</b>場所はどこでしょうか？',
                'hint' => '「学長のメッセージ」「運営団体のメッセージ」のページをみてみよう！',
                'finished_at' => new Carbon('2021-11-16'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
