<?php

namespace Database\Seeders;

use App\Models\Present;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '1451910148679634948',
                'twitter_id' => 'chorlotusokadai',
                'avatar_url' => 'https://pbs.twimg.com/profile_images/444888057414565888/kGBf4Q_F_400x400.jpeg',
                'display_name' => '岡山大学男声合唱団コール・ロータス',
                'comment' => '【岡山大学祭2021】今年の学祭は去年同様オンラインで行われます。弊団は、サイト上での部活動紹介、11/16（火）18時からのパフォーマンス発表に出演します。優秀団体には景品が贈られるそうなので、応援よろしくお願いいたします。ご確認のほどよろしくお願い申し上げます。#岡山大学祭2021',
                'tweet_url' => 'https://twitter.com/chorlotusokadai/status/1451910148679634948',
                'is_visible' => true,
                'created_at' => new Carbon('2021-10-23'),
                'updated_at' => new Carbon('2021-10-23'),
            ],
            [
                'id' => '1451933634055659520',
                'twitter_id' => 'oucrc',
                'avatar_url' => 'https://pbs.twimg.com/profile_images/1005052861749780485/ISQr7qG0_400x400.jpg',
                'display_name' => '岡山大学電子計算機研究会',
                'comment' => '学祭まで残り2週間となりました！電子計算機研究会では部員の作品を展示予定です．是非ご覧ください！ https://oufes2021.com',
                'tweet_url' => 'https://twitter.com/oucrc/status/1451933634055659520',
                'is_visible' => true,
                'created_at' => new Carbon('2021-10-24'),
                'updated_at' => new Carbon('2021-10-24'),
            ],
        ]);
    }
}
