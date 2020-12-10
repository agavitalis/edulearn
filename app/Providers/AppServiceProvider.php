<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        
        //forces assets() to use HTTPS on production
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        //sets default sttring length to 191
        Schema::defaultStringLength(191);
    }
}
