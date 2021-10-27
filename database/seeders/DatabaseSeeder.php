<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Club;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Club::factory(10)->create();
        $this->call([
            PresentTableSeeder::class,
            PresentUserTableSeeder::class,
            QuestionTableSeeder::class,
            QuestionUserSeeder::class,
        ]);
        Answer::factory(10)->create();
    }
}
