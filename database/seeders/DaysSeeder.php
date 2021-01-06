<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Month;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day_1 = Day::create(['name' => "Monday"]);
        $day_2 = Day::create(['name' => "Tuesday"]);
        $day_3 = Day::create(['name' => "Wednesday"]);
        $day_4 = Day::create(['name' => "Thursday"]);
        $day_5 = Day::create(['name' => "Friday"]);
        $day_6 = Day::create(['name' => "Saturday"]);
        $day_7 = Day::create(['name' => "Sunday"]);

    }
}
