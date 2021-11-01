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
                'name' => 'Nintendo Switch 本体',
                'image_path' => '/presents/1',
                'required_stamps' => '8',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JBL WAVE100 TWS 完全ワイヤレスイヤホン',
                'image_path' => '/presents/2',
                'required_stamps' => '7',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'HAGOOGI ハンドブレンダー',
                'image_path' => '/presents/3',
                'required_stamps' => '5',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DVDプレーヤー DVP-506',
                'image_path' => '/presents/4',
                'required_stamps' => '6',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '加湿器 HU-C1A',
                'image_path' => '/presents/5',
                'required_stamps' => '6',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大農場　ジュレ5個セット',
                'image_path' => '/presents/6',
                'required_stamps' => '6',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大農場　ぷりん　6個セット',
                'image_path' => '/presents/7',
                'required_stamps' => '6',
                'stock' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'バッファロー USBメモリ 64GB',
                'image_path' => '/presents/8',
                'required_stamps' => '5',
                'stock' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'スターバックス カード1000円分',
                'image_path' => '/presents/9',
                'required_stamps' => '5',
                'stock' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大 マグカップ',
                'image_path' => '/presents/10',
                'required_stamps' => '5',
                'stock' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大 マフラータオル',
                'image_path' => '/presents/11',
                'required_stamps' => '5',
                'stock' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'いんでいら えびめしの素 1本',
                'image_path' => '/presents/12',
                'required_stamps' => '4',
                'stock' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大 タオルハンカチ',
                'image_path' => '/presents/13',
                'required_stamps' => '4',
                'stock' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大 きびだんご',
                'image_path' => '/presents/14',
                'required_stamps' => '4',
                'stock' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '図書カード 1000円分',
                'image_path' => '/presents/15',
                'required_stamps' => '4',
                'stock' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '岡大お守り & いーちょメモ帳セット',
                'image_path' => '/presents/16',
                'required_stamps' => '1',
                'stock' => '50',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
