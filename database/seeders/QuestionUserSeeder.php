<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QuestionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $apply[] = [
                'user_id' => $i,
                'question_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('question_user')->insert($apply);
    }
}
