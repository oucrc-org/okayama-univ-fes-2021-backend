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
        $dt = new Carbon(config('const.time.finished_at'));

        for ($i = 1; $i <= 20; $i++) {
            $apply[] = [
                'club_id' => 1,
                'quiz' => 'quiz' . $i,
                'finished_at' => $dt,
            ];
            $dt = $dt->copy()->addDay();
        }
        DB::table('questions')->insert($apply);
    }
}
