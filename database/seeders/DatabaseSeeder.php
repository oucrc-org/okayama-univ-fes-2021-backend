<?php

namespace Database\Seeders;

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
        $this->call([
            PresentTableSeeder::class,
            PresentUserTableSeeder::class,
            StampTableSeeder::class,
            QuestionTableSeeder::class,
            AnswerTableSeeder::class,
            QuestionUserSeeder::class,
            PostTableSeeder::class,
        ]);
    }
}
