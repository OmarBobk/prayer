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
        $day = $this->get_day($month, $day_arrangement);
        $prayers = $this->get_prayers($month, $day_arrangement);
        $day_number = ($day_arrangement < 10) ? '0'.$day_arrangement : $day_arrangement;
        $month_number = ($day->pivot->month_id < 10) ? '0'.$day->pivot->month_id : $day->pivot->month_id;
        $date = Carbon::parse(Carbon::now())->isBefore('2021-'.$month_number.'-'.$day_number.' 00:00:00');
        return view("days.show", compact('day', 'prayers', 'date'));
    }

    public function edit($month, $day_arrangement)
    {
        $day = $this->get_day($month, $day_arrangement);
        $prayers = $this->get_prayers($month, $day_arrangement);

        return view("days.edit", compact('day', 'prayers'));
    }

    public function update(Request $request, $month, $day_arrangement)
    {
        $data = User::find(auth()->user()->id)->prayers()
            ->wherePivot('day_arrangement', $day_arrangement)
            ->wherePivot('month', $month);

        $data->updateExistingPivot(1, ['status' => $request->status1]);
        $data->updateExistingPivot(2, ['status' => $request->status2]);
        $data->updateExistingPivot(3, ['status' => $request->status3]);
        $data->updateExistingPivot(4, ['status' => $request->status4]);
        $data->updateExistingPivot(5, ['status' => $request->status5]);

        return redirect($request->referer)->with([
            'message'=> 'Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function get_day($month, $day_arrangement)
    {
        return Month::whereName($month)->first()->days()->wherePivot('day_arrangement', $day_arrangement)->first();
    }

    public function get_prayers($month, $day_arrangement)
    {
        $user_id = auth()->user()->id;

        return User::findOrFail($user_id)->prayers()
            ->wherePivot('user_id', $user_id)
            ->wherePivot('day_arrangement', $day_arrangement)
            ->wherePivot('month', $month)
            ->get();
    }
}
