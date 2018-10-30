<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        define("APP_LAYER", 'http://localhost/simple-micro-services-lumen/app-layer/');
        define("APP_LAYER_TOKEN", '$2y$10$QGodNXsDkI7uscyboVZ45.YsukuPG.ddyCWJSySwrc2HRwyw4XYC.');
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
