<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;
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
    public function boot(UrlGenerator $url)
    {
        
        //forces assets() to use HTTPS on production
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        //sets default sttring length to 191
        Schema::defaultStringLength(191);
    }
}
