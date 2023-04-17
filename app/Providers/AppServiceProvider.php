<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Sanctum::ignoreMigrations;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
    }
}
