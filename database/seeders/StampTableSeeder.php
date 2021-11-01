<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stamps')->insert([
            [
                'name' => 'ワンダーフォーゲル部',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/af2573b5874842149abff46eead35c34/%E3%83%80%E3%82%A6%E3%83%B3%E3%83%AD%E3%83%BC%E3%83%89.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '競技ダンス部',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/da580f38ba03464a8dfd779eb0a656fd/S__229195781.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '少林寺拳法部',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/5a88a5579f6c45eaab2a70f1ad71ae53/shorinjikempoclub_logo.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'グリークラブ',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/4a298a5422274eea831bef95bfc5dfcb/glee.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'キャンパスマガジンNUTS',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/f3e0b4d3a5fa463da008224575649bdc/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%20(10).png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '吟詩部',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/e71190172cab43439c55d6bac4566eba/DSCN2984.JPG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '美術部',
                'image_path' => 'https://images.microcms-assets.io/assets/7734751c51674cb2966df9edbbd3b15b/13be11259e694d9fae6c1171ff03a703/okadaiart_logo.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '校友会',
                'image_path' => 'https://oufes2021.com/apple-touch-icon.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
