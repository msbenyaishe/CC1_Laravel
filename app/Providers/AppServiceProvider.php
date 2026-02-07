<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // 1. Important: Import the URL facade

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
        /** * 2. Force HTTPS for all generated URLs (CSS, JS, Forms) 
         * only when the application is running in production.
         */
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}