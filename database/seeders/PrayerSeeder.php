<?php

namespace Database\Seeders;

use App\Models\Prayer;
use Illuminate\Database\Seeder;

class PrayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Fajr'],
            ['name' => 'Zuher'],
            ['name' => 'Asr'],
            ['name' => 'Maghreb'],
            ['name' => 'Eshaa'],
        ];

        Prayer::insert($data);
    }
}
