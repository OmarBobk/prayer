<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => "January",   'days_number' => 31],
            ['name' => "February",  'days_number' => 28],
            ['name' => "March",     'days_number' => 31],
            ['name' => "April",     'days_number' => 30],
            ['name' => "May",       'days_number' => 31],
            ['name' => "June",      'days_number' => 30],
            ['name' => "July",      'days_number' => 31],
            ['name' => "August",    'days_number' => 31],
            ['name' => "September", 'days_number' => 30],
            ['name' => "October",   'days_number' => 31],
            ['name' => "November",  'days_number' => 30],
            ['name' => "December",  'days_number' => 31],
        ];

        Month::insert($data);
    }
}
