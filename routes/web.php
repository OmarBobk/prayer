<?php

use App\Http\Controllers\DayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthController;
use App\Models\Month;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/testing', function () {
    $data = Month::whereName('January')->first()->days()->wherePivot('day_arrangement', 1)->first()->pivot->day_arrangement;

//    return $data;

//    echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S');

//    return User::testing()->whereId(1)->get();

//    return User::userWherePivot('January', 1)->get();

//    ->wherePivot('day_arrangement', $day_arrangement)
//            ->wherePivot('month', $month)

//    $day_arrangement = ['column_name' => 'day_arrangement', 'column_value' => 1];
//    $month = ['column_name' => 'month', 'column_value' => 'January'];
//
//    return User::testing($day_arrangement, $month)->get();

    return Carbon::today()->format('Y m d');


});

Route::get('/{month}', [MonthController::class, 'show'])->name('month.show');

Route::get('/{month}/{day}', [DayController::class, 'show'])->name('day.show');
Route::get('/{month}/{day}/edit', [DayController::class, 'edit'])->name('prayer.edit');
Route::post('/{month}/{day}}', [DayController::class, 'update'])->name('prayer.update');
