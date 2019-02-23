<?php

namespace App\Providers;

use App\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $food_at_diseases = DB::table('food_at_diseases')->latest()->get()->toArray();
       \View::share('food_at_diseases', $food_at_diseases);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
