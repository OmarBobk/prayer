<?php

namespace Database\Seeders;

use App\Models\PrayerUser;
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
        $this->call([
            UserSeeder::class,
            MonthSeeder::class,
            DaysSeeder::class,
            DayMonthSeeder::class,
            PrayerSeeder::class,
            PrayerUserSeeder::class,
        ]);
    }
}
