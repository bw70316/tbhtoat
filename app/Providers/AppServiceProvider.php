<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\GameData;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // view()->composer('partials.sidebar', function($view){
        
        // $view->with('gamedatas', GameData::findOrFail();

        // });
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
