<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['home', 'months.show'], function ($view) {

            $data = function ($month, $i) {
                return (Carbon::today()->format('Y-m-d') == "2021-".(($month->id<10)
                            ? "0".$month->id
                            : $month->id)."-".(($i<10)
                            ? "0".$i :
                            $i))
                        ? " today_circle "
                        : " ";
            };

            $view->with([
                'data' => $data,
            ]);
        });
    }
}
