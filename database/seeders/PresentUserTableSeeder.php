<?php

namespace Database\Seeders;

use App\Models\Present;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PresentUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var Present $present
         **/

        for ($i = 1; $i <= 20; $i++) {
            $present_id = rand(1, 16);
            $present = Present::query()->find($present_id);
            $apply[] = [
                'user_id' => $i,
                'present_id' => $present_id,
                'stamps' => rand($present->required_stamps, 8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('present_user')->insert($apply);
    }
}
