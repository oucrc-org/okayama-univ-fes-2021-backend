<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PresentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presents')->insert([
            [
                'name' => 'Nintendo Switch',
                'image_path' => '',
                'required_stamps' => '6',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '電子書籍リーダー',
                'image_path' => '',
                'required_stamps' => '5',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ワイヤレスイヤフォン',
                'image_path' => '',
                'required_stamps' => '5',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ホットプレート',
                'image_path' => '',
                'required_stamps' => '4',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '図書カード 5000円分',
                'image_path' => '',
                'required_stamps' => '4',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '加湿器',
                'image_path' => '',
                'required_stamps' => '4',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ハンドブレンダー',
                'image_path' => '',
                'required_stamps' => '4',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大農場 ジュレ5個セット',
                'image_path' => '',
                'required_stamps' => '3',
                'stock' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大農場 ぷりん6個セット',
                'image_path' => '',
                'required_stamps' => '3',
                'stock' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'USBメモリー 64GB',
                'image_path' => '',
                'required_stamps' => '3',
                'stock' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大きびだんご',
                'image_path' => '',
                'required_stamps' => '2',
                'stock' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大マグカップ',
                'image_path' => '',
                'required_stamps' => '2',
                'stock' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大ハンカチ',
                'image_path' => '',
                'required_stamps' => '2',
                'stock' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大エコバック',
                'image_path' => '',
                'required_stamps' => '2',
                'stock' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '図書カード 1000円分',
                'image_path' => '',
                'required_stamps' => '2',
                'stock' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大お守り & メモ帳',
                'image_path' => '',
                'required_stamps' => '1',
                'stock' => '200',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
