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
        for ($i = 1; $i <= 20; $i++) {
            $present_id = rand(1, 16);
            $present = Present::query()->find($present_id);
            $apply[] = [
                'id' => $i,
                'twitter_id' => 'tweet',
                'avatar_url' => 'avatar',
                'display_name' => Str::random(),
                'comment' => Str::random(),
                'tweet_url' => Str::random(),
                'is_visible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('posts')->insert($apply);
    }
}
