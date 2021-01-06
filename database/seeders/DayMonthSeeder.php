<?php

namespace Database\Seeders;

use App\Models\DayMonth;
use Illuminate\Database\Seeder;

class DayMonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $january = [
            // 1.week
            ["day_id" => 5, "month_id" => 1, "day_arrangement" => 1],
            ["day_id" => 6, "month_id" => 1, "day_arrangement" => 2],
            ["day_id" => 7, "month_id" => 1, "day_arrangement" => 3],
            ["day_id" => 1, "month_id" => 1, "day_arrangement" => 4],
            ["day_id" => 2, "month_id" => 1, "day_arrangement" => 5],
            ["day_id" => 3, "month_id" => 1, "day_arrangement" => 6],
            ["day_id" => 4, "month_id" => 1, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 5, "month_id" => 1, "day_arrangement" => 8],
            ["day_id" => 6, "month_id" => 1, "day_arrangement" => 9],
            ["day_id" => 7, "month_id" => 1, "day_arrangement" => 10],
            ["day_id" => 1, "month_id" => 1, "day_arrangement" => 11],
            ["day_id" => 2, "month_id" => 1, "day_arrangement" => 12],
            ["day_id" => 3, "month_id" => 1, "day_arrangement" => 13],
            ["day_id" => 4, "month_id" => 1, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 5, "month_id" => 1, "day_arrangement" => 15],
            ["day_id" => 6, "month_id" => 1, "day_arrangement" => 16],
            ["day_id" => 7, "month_id" => 1, "day_arrangement" => 17],
            ["day_id" => 1, "month_id" => 1, "day_arrangement" => 18],
            ["day_id" => 2, "month_id" => 1, "day_arrangement" => 19],
            ["day_id" => 3, "month_id" => 1, "day_arrangement" => 20],
            ["day_id" => 4, "month_id" => 1, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 5, "month_id" => 1, "day_arrangement" => 22],
            ["day_id" => 6, "month_id" => 1, "day_arrangement" => 23],
            ["day_id" => 7, "month_id" => 1, "day_arrangement" => 24],
            ["day_id" => 1, "month_id" => 1, "day_arrangement" => 25],
            ["day_id" => 2, "month_id" => 1, "day_arrangement" => 26],
            ["day_id" => 3, "month_id" => 1, "day_arrangement" => 27],
            ["day_id" => 4, "month_id" => 1, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 5, "month_id" => 1, "day_arrangement" => 29],
            ["day_id" => 6, "month_id" => 1, "day_arrangement" => 30],
            ["day_id" => 7, "month_id" => 1, "day_arrangement" => 31],
        ];

        DayMonth::insert($january);

        $february = [
            // 1.week
            ["day_id" => 1, "month_id" => 2, "day_arrangement" => 1],
            ["day_id" => 2, "month_id" => 2, "day_arrangement" => 2],
            ["day_id" => 3, "month_id" => 2, "day_arrangement" => 3],
            ["day_id" => 4, "month_id" => 2, "day_arrangement" => 4],
            ["day_id" => 5, "month_id" => 2, "day_arrangement" => 5],
            ["day_id" => 6, "month_id" => 2, "day_arrangement" => 6],
            ["day_id" => 7, "month_id" => 2, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 1, "month_id" => 2, "day_arrangement" => 8],
            ["day_id" => 2, "month_id" => 2, "day_arrangement" => 9],
            ["day_id" => 3, "month_id" => 2, "day_arrangement" => 10],
            ["day_id" => 4, "month_id" => 2, "day_arrangement" => 11],
            ["day_id" => 5, "month_id" => 2, "day_arrangement" => 12],
            ["day_id" => 6, "month_id" => 2, "day_arrangement" => 13],
            ["day_id" => 7, "month_id" => 2, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 1, "month_id" => 2, "day_arrangement" => 15],
            ["day_id" => 2, "month_id" => 2, "day_arrangement" => 16],
            ["day_id" => 3, "month_id" => 2, "day_arrangement" => 17],
            ["day_id" => 4, "month_id" => 2, "day_arrangement" => 18],
            ["day_id" => 5, "month_id" => 2, "day_arrangement" => 19],
            ["day_id" => 6, "month_id" => 2, "day_arrangement" => 20],
            ["day_id" => 7, "month_id" => 2, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 1, "month_id" => 2, "day_arrangement" => 22],
            ["day_id" => 2, "month_id" => 2, "day_arrangement" => 23],
            ["day_id" => 3, "month_id" => 2, "day_arrangement" => 24],
            ["day_id" => 4, "month_id" => 2, "day_arrangement" => 25],
            ["day_id" => 5, "month_id" => 2, "day_arrangement" => 26],
            ["day_id" => 6, "month_id" => 2, "day_arrangement" => 27],
            ["day_id" => 7, "month_id" => 2, "day_arrangement" => 28],
        ];

        DayMonth::insert($february);

        $march = [
            // 1.week
            ["day_id" => 1, "month_id" => 3, "day_arrangement" => 1],
            ["day_id" => 2, "month_id" => 3, "day_arrangement" => 2],
            ["day_id" => 3, "month_id" => 3, "day_arrangement" => 3],
            ["day_id" => 4, "month_id" => 3, "day_arrangement" => 4],
            ["day_id" => 5, "month_id" => 3, "day_arrangement" => 5],
            ["day_id" => 6, "month_id" => 3, "day_arrangement" => 6],
            ["day_id" => 7, "month_id" => 3, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 1, "month_id" => 3, "day_arrangement" => 8],
            ["day_id" => 2, "month_id" => 3, "day_arrangement" => 9],
            ["day_id" => 3, "month_id" => 3, "day_arrangement" => 10],
            ["day_id" => 4, "month_id" => 3, "day_arrangement" => 11],
            ["day_id" => 5, "month_id" => 3, "day_arrangement" => 12],
            ["day_id" => 6, "month_id" => 3, "day_arrangement" => 13],
            ["day_id" => 7, "month_id" => 3, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 1, "month_id" => 3, "day_arrangement" => 15],
            ["day_id" => 2, "month_id" => 3, "day_arrangement" => 16],
            ["day_id" => 3, "month_id" => 3, "day_arrangement" => 17],
            ["day_id" => 4, "month_id" => 3, "day_arrangement" => 18],
            ["day_id" => 5, "month_id" => 3, "day_arrangement" => 19],
            ["day_id" => 6, "month_id" => 3, "day_arrangement" => 20],
            ["day_id" => 7, "month_id" => 3, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 1, "month_id" => 3, "day_arrangement" => 22],
            ["day_id" => 2, "month_id" => 3, "day_arrangement" => 23],
            ["day_id" => 3, "month_id" => 3, "day_arrangement" => 24],
            ["day_id" => 4, "month_id" => 3, "day_arrangement" => 25],
            ["day_id" => 5, "month_id" => 3, "day_arrangement" => 26],
            ["day_id" => 6, "month_id" => 3, "day_arrangement" => 27],
            ["day_id" => 7, "month_id" => 3, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 1, "month_id" => 3, "day_arrangement" => 29],
            ["day_id" => 2, "month_id" => 3, "day_arrangement" => 30],
            ["day_id" => 3, "month_id" => 3, "day_arrangement" => 31],
        ];

        DayMonth::insert($march);

        $april = [
            // 1.week
            ["day_id" => 4, "month_id" => 4, "day_arrangement" => 1],
            ["day_id" => 5, "month_id" => 4, "day_arrangement" => 2],
            ["day_id" => 6, "month_id" => 4, "day_arrangement" => 3],
            ["day_id" => 7, "month_id" => 4, "day_arrangement" => 4],
            ["day_id" => 1, "month_id" => 4, "day_arrangement" => 5],
            ["day_id" => 2, "month_id" => 4, "day_arrangement" => 6],
            ["day_id" => 3, "month_id" => 4, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 4, "month_id" => 4, "day_arrangement" => 8],
            ["day_id" => 5, "month_id" => 4, "day_arrangement" => 9],
            ["day_id" => 6, "month_id" => 4, "day_arrangement" => 10],
            ["day_id" => 7, "month_id" => 4, "day_arrangement" => 11],
            ["day_id" => 1, "month_id" => 4, "day_arrangement" => 12],
            ["day_id" => 2, "month_id" => 4, "day_arrangement" => 13],
            ["day_id" => 3, "month_id" => 4, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 4, "month_id" => 4, "day_arrangement" => 15],
            ["day_id" => 5, "month_id" => 4, "day_arrangement" => 16],
            ["day_id" => 6, "month_id" => 4, "day_arrangement" => 17],
            ["day_id" => 7, "month_id" => 4, "day_arrangement" => 18],
            ["day_id" => 1, "month_id" => 4, "day_arrangement" => 19],
            ["day_id" => 2, "month_id" => 4, "day_arrangement" => 20],
            ["day_id" => 3, "month_id" => 4, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 4, "month_id" => 4, "day_arrangement" => 22],
            ["day_id" => 5, "month_id" => 4, "day_arrangement" => 23],
            ["day_id" => 6, "month_id" => 4, "day_arrangement" => 24],
            ["day_id" => 7, "month_id" => 4, "day_arrangement" => 25],
            ["day_id" => 1, "month_id" => 4, "day_arrangement" => 26],
            ["day_id" => 2, "month_id" => 4, "day_arrangement" => 27],
            ["day_id" => 3, "month_id" => 4, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 4, "month_id" => 4, "day_arrangement" => 29],
            ["day_id" => 5, "month_id" => 4, "day_arrangement" => 30],
        ];

        DayMonth::insert($april);

        $may = [
            // 1.week
            ["day_id" => 6, "month_id" => 5, "day_arrangement" => 1],
            ["day_id" => 7, "month_id" => 5, "day_arrangement" => 2],
            ["day_id" => 1, "month_id" => 5, "day_arrangement" => 3],
            ["day_id" => 2, "month_id" => 5, "day_arrangement" => 4],
            ["day_id" => 3, "month_id" => 5, "day_arrangement" => 5],
            ["day_id" => 4, "month_id" => 5, "day_arrangement" => 6],
            ["day_id" => 5, "month_id" => 5, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 6, "month_id" => 5, "day_arrangement" => 8],
            ["day_id" => 7, "month_id" => 5, "day_arrangement" => 9],
            ["day_id" => 1, "month_id" => 5, "day_arrangement" => 10],
            ["day_id" => 2, "month_id" => 5, "day_arrangement" => 11],
            ["day_id" => 3, "month_id" => 5, "day_arrangement" => 12],
            ["day_id" => 4, "month_id" => 5, "day_arrangement" => 13],
            ["day_id" => 5, "month_id" => 5, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 6, "month_id" => 5, "day_arrangement" => 15],
            ["day_id" => 7, "month_id" => 5, "day_arrangement" => 16],
            ["day_id" => 1, "month_id" => 5, "day_arrangement" => 17],
            ["day_id" => 2, "month_id" => 5, "day_arrangement" => 18],
            ["day_id" => 3, "month_id" => 5, "day_arrangement" => 19],
            ["day_id" => 4, "month_id" => 5, "day_arrangement" => 20],
            ["day_id" => 5, "month_id" => 5, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 6, "month_id" => 5, "day_arrangement" => 22],
            ["day_id" => 7, "month_id" => 5, "day_arrangement" => 23],
            ["day_id" => 1, "month_id" => 5, "day_arrangement" => 24],
            ["day_id" => 2, "month_id" => 5, "day_arrangement" => 25],
            ["day_id" => 3, "month_id" => 5, "day_arrangement" => 26],
            ["day_id" => 4, "month_id" => 5, "day_arrangement" => 27],
            ["day_id" => 5, "month_id" => 5, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 6, "month_id" => 5, "day_arrangement" => 29],
            ["day_id" => 7, "month_id" => 5, "day_arrangement" => 30],
            ["day_id" => 1, "month_id" => 5, "day_arrangement" => 31],
        ];

        DayMonth::insert($may);

        $june = [
            // 1.week
            ["day_id" => 2, "month_id" => 6, "day_arrangement" => 1],
            ["day_id" => 3, "month_id" => 6, "day_arrangement" => 2],
            ["day_id" => 4, "month_id" => 6, "day_arrangement" => 3],
            ["day_id" => 5, "month_id" => 6, "day_arrangement" => 4],
            ["day_id" => 6, "month_id" => 6, "day_arrangement" => 5],
            ["day_id" => 7, "month_id" => 6, "day_arrangement" => 6],
            ["day_id" => 1, "month_id" => 6, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 2, "month_id" => 6, "day_arrangement" => 8],
            ["day_id" => 3, "month_id" => 6, "day_arrangement" => 9],
            ["day_id" => 4, "month_id" => 6, "day_arrangement" => 10],
            ["day_id" => 5, "month_id" => 6, "day_arrangement" => 11],
            ["day_id" => 6, "month_id" => 6, "day_arrangement" => 12],
            ["day_id" => 7, "month_id" => 6, "day_arrangement" => 13],
            ["day_id" => 1, "month_id" => 6, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 2, "month_id" => 6, "day_arrangement" => 15],
            ["day_id" => 3, "month_id" => 6, "day_arrangement" => 16],
            ["day_id" => 4, "month_id" => 6, "day_arrangement" => 17],
            ["day_id" => 5, "month_id" => 6, "day_arrangement" => 18],
            ["day_id" => 6, "month_id" => 6, "day_arrangement" => 19],
            ["day_id" => 7, "month_id" => 6, "day_arrangement" => 20],
            ["day_id" => 1, "month_id" => 6, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 2, "month_id" => 6, "day_arrangement" => 22],
            ["day_id" => 3, "month_id" => 6, "day_arrangement" => 23],
            ["day_id" => 4, "month_id" => 6, "day_arrangement" => 24],
            ["day_id" => 5, "month_id" => 6, "day_arrangement" => 25],
            ["day_id" => 6, "month_id" => 6, "day_arrangement" => 26],
            ["day_id" => 7, "month_id" => 6, "day_arrangement" => 27],
            ["day_id" => 1, "month_id" => 6, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 2, "month_id" => 6, "day_arrangement" => 29],
            ["day_id" => 3, "month_id" => 6, "day_arrangement" => 30],
        ];

        DayMonth::insert($june);

        $july = [
            // 1.week
            ["day_id" => 4, "month_id" => 7, "day_arrangement" => 1],
            ["day_id" => 5, "month_id" => 7, "day_arrangement" => 2],
            ["day_id" => 6, "month_id" => 7, "day_arrangement" => 3],
            ["day_id" => 7, "month_id" => 7, "day_arrangement" => 4],
            ["day_id" => 1, "month_id" => 7, "day_arrangement" => 5],
            ["day_id" => 2, "month_id" => 7, "day_arrangement" => 6],
            ["day_id" => 3, "month_id" => 7, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 4, "month_id" => 7, "day_arrangement" => 8],
            ["day_id" => 5, "month_id" => 7, "day_arrangement" => 9],
            ["day_id" => 6, "month_id" => 7, "day_arrangement" => 10],
            ["day_id" => 7, "month_id" => 7, "day_arrangement" => 11],
            ["day_id" => 1, "month_id" => 7, "day_arrangement" => 12],
            ["day_id" => 2, "month_id" => 7, "day_arrangement" => 13],
            ["day_id" => 3, "month_id" => 7, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 4, "month_id" => 7, "day_arrangement" => 15],
            ["day_id" => 5, "month_id" => 7, "day_arrangement" => 16],
            ["day_id" => 6, "month_id" => 7, "day_arrangement" => 17],
            ["day_id" => 7, "month_id" => 7, "day_arrangement" => 18],
            ["day_id" => 1, "month_id" => 7, "day_arrangement" => 19],
            ["day_id" => 2, "month_id" => 7, "day_arrangement" => 20],
            ["day_id" => 3, "month_id" => 7, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 4, "month_id" => 7, "day_arrangement" => 22],
            ["day_id" => 5, "month_id" => 7, "day_arrangement" => 23],
            ["day_id" => 6, "month_id" => 7, "day_arrangement" => 24],
            ["day_id" => 7, "month_id" => 7, "day_arrangement" => 25],
            ["day_id" => 1, "month_id" => 7, "day_arrangement" => 26],
            ["day_id" => 2, "month_id" => 7, "day_arrangement" => 27],
            ["day_id" => 3, "month_id" => 7, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 4, "month_id" => 7, "day_arrangement" => 29],
            ["day_id" => 5, "month_id" => 7, "day_arrangement" => 30],
            ["day_id" => 6, "month_id" => 7, "day_arrangement" => 31],
        ];

        DayMonth::insert($july);

        $august = [
            // 1.week
            ["day_id" => 7, "month_id" => 8, "day_arrangement" => 1],
            ["day_id" => 1, "month_id" => 8, "day_arrangement" => 2],
            ["day_id" => 2, "month_id" => 8, "day_arrangement" => 3],
            ["day_id" => 3, "month_id" => 8, "day_arrangement" => 4],
            ["day_id" => 4, "month_id" => 8, "day_arrangement" => 5],
            ["day_id" => 5, "month_id" => 8, "day_arrangement" => 6],
            ["day_id" => 6, "month_id" => 8, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 7, "month_id" => 8, "day_arrangement" => 8],
            ["day_id" => 1, "month_id" => 8, "day_arrangement" => 9],
            ["day_id" => 2, "month_id" => 8, "day_arrangement" => 10],
            ["day_id" => 3, "month_id" => 8, "day_arrangement" => 11],
            ["day_id" => 4, "month_id" => 8, "day_arrangement" => 12],
            ["day_id" => 5, "month_id" => 8, "day_arrangement" => 13],
            ["day_id" => 6, "month_id" => 8, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 7, "month_id" => 8, "day_arrangement" => 15],
            ["day_id" => 1, "month_id" => 8, "day_arrangement" => 16],
            ["day_id" => 2, "month_id" => 8, "day_arrangement" => 17],
            ["day_id" => 3, "month_id" => 8, "day_arrangement" => 18],
            ["day_id" => 4, "month_id" => 8, "day_arrangement" => 19],
            ["day_id" => 5, "month_id" => 8, "day_arrangement" => 20],
            ["day_id" => 6, "month_id" => 8, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 7, "month_id" => 8, "day_arrangement" => 22],
            ["day_id" => 1, "month_id" => 8, "day_arrangement" => 23],
            ["day_id" => 2, "month_id" => 8, "day_arrangement" => 24],
            ["day_id" => 3, "month_id" => 8, "day_arrangement" => 25],
            ["day_id" => 4, "month_id" => 8, "day_arrangement" => 26],
            ["day_id" => 5, "month_id" => 8, "day_arrangement" => 27],
            ["day_id" => 6, "month_id" => 8, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 7, "month_id" => 8, "day_arrangement" => 29],
            ["day_id" => 1, "month_id" => 8, "day_arrangement" => 30],
            ["day_id" => 2, "month_id" => 8, "day_arrangement" => 31],
        ];

        DayMonth::insert($august);

        $september = [
            // 1.week
            ["day_id" => 3, "month_id" => 9, "day_arrangement" => 1],
            ["day_id" => 4, "month_id" => 9, "day_arrangement" => 2],
            ["day_id" => 5, "month_id" => 9, "day_arrangement" => 3],
            ["day_id" => 6, "month_id" => 9, "day_arrangement" => 4],
            ["day_id" => 7, "month_id" => 9, "day_arrangement" => 5],
            ["day_id" => 1, "month_id" => 9, "day_arrangement" => 6],
            ["day_id" => 2, "month_id" => 9, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 3, "month_id" => 9, "day_arrangement" => 8],
            ["day_id" => 4, "month_id" => 9, "day_arrangement" => 9],
            ["day_id" => 5, "month_id" => 9, "day_arrangement" => 10],
            ["day_id" => 6, "month_id" => 9, "day_arrangement" => 11],
            ["day_id" => 7, "month_id" => 9, "day_arrangement" => 12],
            ["day_id" => 1, "month_id" => 9, "day_arrangement" => 13],
            ["day_id" => 2, "month_id" => 9, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 3, "month_id" => 9, "day_arrangement" => 15],
            ["day_id" => 4, "month_id" => 9, "day_arrangement" => 16],
            ["day_id" => 5, "month_id" => 9, "day_arrangement" => 17],
            ["day_id" => 6, "month_id" => 9, "day_arrangement" => 18],
            ["day_id" => 7, "month_id" => 9, "day_arrangement" => 19],
            ["day_id" => 1, "month_id" => 9, "day_arrangement" => 20],
            ["day_id" => 2, "month_id" => 9, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 3, "month_id" => 9, "day_arrangement" => 22],
            ["day_id" => 4, "month_id" => 9, "day_arrangement" => 23],
            ["day_id" => 5, "month_id" => 9, "day_arrangement" => 24],
            ["day_id" => 6, "month_id" => 9, "day_arrangement" => 25],
            ["day_id" => 7, "month_id" => 9, "day_arrangement" => 26],
            ["day_id" => 1, "month_id" => 9, "day_arrangement" => 27],
            ["day_id" => 2, "month_id" => 9, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 3, "month_id" => 9, "day_arrangement" => 29],
            ["day_id" => 4, "month_id" => 9, "day_arrangement" => 30],
        ];

        DayMonth::insert($september);

        $october = [
            // 1.week
            ["day_id" => 5, "month_id" => 10, "day_arrangement" => 1],
            ["day_id" => 6, "month_id" => 10, "day_arrangement" => 2],
            ["day_id" => 7, "month_id" => 10, "day_arrangement" => 3],
            ["day_id" => 1, "month_id" => 10, "day_arrangement" => 4],
            ["day_id" => 2, "month_id" => 10, "day_arrangement" => 5],
            ["day_id" => 3, "month_id" => 10, "day_arrangement" => 6],
            ["day_id" => 4, "month_id" => 10, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 5, "month_id" => 10, "day_arrangement" => 8],
            ["day_id" => 6, "month_id" => 10, "day_arrangement" => 9],
            ["day_id" => 7, "month_id" => 10, "day_arrangement" => 10],
            ["day_id" => 1, "month_id" => 10, "day_arrangement" => 11],
            ["day_id" => 2, "month_id" => 10, "day_arrangement" => 12],
            ["day_id" => 3, "month_id" => 10, "day_arrangement" => 13],
            ["day_id" => 4, "month_id" => 10, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 5, "month_id" => 10, "day_arrangement" => 15],
            ["day_id" => 6, "month_id" => 10, "day_arrangement" => 16],
            ["day_id" => 7, "month_id" => 10, "day_arrangement" => 17],
            ["day_id" => 1, "month_id" => 10, "day_arrangement" => 18],
            ["day_id" => 2, "month_id" => 10, "day_arrangement" => 19],
            ["day_id" => 3, "month_id" => 10, "day_arrangement" => 20],
            ["day_id" => 4, "month_id" => 10, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 5, "month_id" => 10, "day_arrangement" => 22],
            ["day_id" => 6, "month_id" => 10, "day_arrangement" => 23],
            ["day_id" => 7, "month_id" => 10, "day_arrangement" => 24],
            ["day_id" => 1, "month_id" => 10, "day_arrangement" => 25],
            ["day_id" => 2, "month_id" => 10, "day_arrangement" => 26],
            ["day_id" => 3, "month_id" => 10, "day_arrangement" => 27],
            ["day_id" => 4, "month_id" => 10, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 5, "month_id" => 10, "day_arrangement" => 29],
            ["day_id" => 6, "month_id" => 10, "day_arrangement" => 30],
            ["day_id" => 7, "month_id" => 10, "day_arrangement" => 31],
        ];

        DayMonth::insert($october);

        $november = [
            // 1.week
            ["day_id" => 1, "month_id" => 11, "day_arrangement" => 1],
            ["day_id" => 2, "month_id" => 11, "day_arrangement" => 2],
            ["day_id" => 3, "month_id" => 11, "day_arrangement" => 3],
            ["day_id" => 4, "month_id" => 11, "day_arrangement" => 4],
            ["day_id" => 5, "month_id" => 11, "day_arrangement" => 5],
            ["day_id" => 6, "month_id" => 11, "day_arrangement" => 6],
            ["day_id" => 7, "month_id" => 11, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 1, "month_id" => 11, "day_arrangement" => 8],
            ["day_id" => 2, "month_id" => 11, "day_arrangement" => 9],
            ["day_id" => 3, "month_id" => 11, "day_arrangement" => 10],
            ["day_id" => 4, "month_id" => 11, "day_arrangement" => 11],
            ["day_id" => 5, "month_id" => 11, "day_arrangement" => 12],
            ["day_id" => 6, "month_id" => 11, "day_arrangement" => 13],
            ["day_id" => 7, "month_id" => 11, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 1, "month_id" => 11, "day_arrangement" => 15],
            ["day_id" => 2, "month_id" => 11, "day_arrangement" => 16],
            ["day_id" => 3, "month_id" => 11, "day_arrangement" => 17],
            ["day_id" => 4, "month_id" => 11, "day_arrangement" => 18],
            ["day_id" => 5, "month_id" => 11, "day_arrangement" => 19],
            ["day_id" => 6, "month_id" => 11, "day_arrangement" => 20],
            ["day_id" => 7, "month_id" => 11, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 1, "month_id" => 11, "day_arrangement" => 22],
            ["day_id" => 2, "month_id" => 11, "day_arrangement" => 23],
            ["day_id" => 3, "month_id" => 11, "day_arrangement" => 24],
            ["day_id" => 4, "month_id" => 11, "day_arrangement" => 25],
            ["day_id" => 5, "month_id" => 11, "day_arrangement" => 26],
            ["day_id" => 6, "month_id" => 11, "day_arrangement" => 27],
            ["day_id" => 7, "month_id" => 11, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 1, "month_id" => 11, "day_arrangement" => 29],
            ["day_id" => 2, "month_id" => 11, "day_arrangement" => 30],
        ];

        DayMonth::insert($november);

        $december = [
            // 1.week
            ["day_id" => 3, "month_id" => 12, "day_arrangement" => 1],
            ["day_id" => 4, "month_id" => 12, "day_arrangement" => 2],
            ["day_id" => 5, "month_id" => 12, "day_arrangement" => 3],
            ["day_id" => 6, "month_id" => 12, "day_arrangement" => 4],
            ["day_id" => 7, "month_id" => 12, "day_arrangement" => 5],
            ["day_id" => 1, "month_id" => 12, "day_arrangement" => 6],
            ["day_id" => 2, "month_id" => 12, "day_arrangement" => 7],

            // 2.week
            ["day_id" => 3, "month_id" => 12, "day_arrangement" => 8],
            ["day_id" => 4, "month_id" => 12, "day_arrangement" => 9],
            ["day_id" => 5, "month_id" => 12, "day_arrangement" => 10],
            ["day_id" => 6, "month_id" => 12, "day_arrangement" => 11],
            ["day_id" => 7, "month_id" => 12, "day_arrangement" => 12],
            ["day_id" => 1, "month_id" => 12, "day_arrangement" => 13],
            ["day_id" => 2, "month_id" => 12, "day_arrangement" => 14],

            // 3.week
            ["day_id" => 3, "month_id" => 12, "day_arrangement" => 15],
            ["day_id" => 4, "month_id" => 12, "day_arrangement" => 16],
            ["day_id" => 5, "month_id" => 12, "day_arrangement" => 17],
            ["day_id" => 6, "month_id" => 12, "day_arrangement" => 18],
            ["day_id" => 7, "month_id" => 12, "day_arrangement" => 19],
            ["day_id" => 1, "month_id" => 12, "day_arrangement" => 20],
            ["day_id" => 2, "month_id" => 12, "day_arrangement" => 21],

            // 4.week
            ["day_id" => 3, "month_id" => 12, "day_arrangement" => 22],
            ["day_id" => 4, "month_id" => 12, "day_arrangement" => 23],
            ["day_id" => 5, "month_id" => 12, "day_arrangement" => 24],
            ["day_id" => 6, "month_id" => 12, "day_arrangement" => 25],
            ["day_id" => 7, "month_id" => 12, "day_arrangement" => 26],
            ["day_id" => 1, "month_id" => 12, "day_arrangement" => 27],
            ["day_id" => 2, "month_id" => 12, "day_arrangement" => 28],

            // 5.week
            ["day_id" => 1, "month_id" => 12, "day_arrangement" => 29],
            ["day_id" => 2, "month_id" => 12, "day_arrangement" => 30],
            ["day_id" => 3, "month_id" => 12, "day_arrangement" => 31],
        ];

        DayMonth::insert($december);
    }
}
