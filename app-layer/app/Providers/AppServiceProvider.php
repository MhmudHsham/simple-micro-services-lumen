<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Boot new constants to be shared in whole project
     */
    public function boot() {
        // Events
        define("EVENTS_KEY_CONNECTION", "http://localhost/simple-micro-services-lumen/services-layer/events-service/");
        define("EVENTS_TOKEN", '$2y$10$a7wUVW.94SWE6XdxfAj5sOep9XIctRbLlx2m7Jci8E//hgv4.Ebwm');

        // Posts
        define("POSTS_KEY_CONNECTION", "http://localhost/simple-micro-services-lumen/services-layer/posts-service/");
        define("POSTS_TOKEN", '$2y$10$wBhncqHEiWn4uBwkxeFyR.jfANryL3lmi5tf13fRxUkw.MAmn2L2y');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
