<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Month;
use App\Models\Prayer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function show($month, $day_arrangement)
    {
        $day            = $this->get_day($month, $day_arrangement);
        $prayers        = $this->get_prayers($month, $day_arrangement);
        $day_number     = ($day_arrangement < 10) ? '0'.$day_arrangement : $day_arrangement;
        $month_number   = ($day->pivot->month_id < 10) ? '0'.$day->pivot->month_id : $day->pivot->month_id;
        $date           = Carbon::parse(Carbon::now())
                            ->isBefore('2021-'.$month_number.'-'.$day_number.' 00:00:00');

        return view("days.show", compact('day', 'prayers', 'date'));
    }

    public function edit($month, $day_arrangement)
    {
        $day     = $this->get_day($month, $day_arrangement);
        $prayers = $this->get_prayers($month, $day_arrangement);

        return view("days.edit", compact('day', 'prayers'));
    }

    public function update(Request $request, $month, $day_arrangement)
    {
        $data = $this->get_user_where_pivot([
            ['column_name' => 'month', 'column_value' => $month],
            ['column_name' => 'day_arrangement', 'column_value' => $day_arrangement]
        ]);

        for ($i = 1; $i <= 5; $i++) $data->updateExistingPivot($i, ['status' => $request->input('status'. $i)]);

        return redirect($request->referer)->with(['message'=> 'Updated Successfully', 'alert-type' => 'success']);
    }

    public function get_day($month, $day_arrangement)
    {
        return Month::whereName($month)->first()->days()
                    ->wherePivot('day_arrangement', $day_arrangement)->first();
    }

    public function get_prayers($month, $day_arrangement)
    {
        return $this->get_user_where_pivot([
            ['column_name' => 'month'          , 'column_value' => $month],
            ['column_name' => 'day_arrangement', 'column_value' => $day_arrangement],
            ['column_name' => 'user_id'        , 'column_value' => auth()->user()->id]
        ])->get();
    }

    public function get_user_where_pivot($data)
    {
        return User::userWherePivot(...$data);
    }
}
