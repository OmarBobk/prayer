<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\User;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function show($month) {
        $user_id = auth()->user()->id;
        $month = Month::whereName($month)->first();
        $prayers = User::findOrFail($user_id)->prayers()
            ->wherePivot('user_id', $user_id)
            ->wherePivot('month', $month->name)
            ->get();

        return view('months.show', compact('month', 'prayers'));
//        return $prayers;
    }
}
