<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $_SERVER['HTTP_HOST'] = 'delhiarpitpatel-solid-lamp-x45x47xrwg6hp4xg-8000.preview.app.github.dev';
        $_SERVER['HTTP_HOST'] = hostname
        URL::forceRootUrl('https://'.$_SERVER['HTTP_HOST'].'');
    }
}
