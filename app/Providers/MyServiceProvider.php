<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repository\UserInterface', 'App\Repository\Database\User');
//        $this->app->bind('App\Repository\UserRepository', 'App\Repository\Database\User');
//
//        $this->app->bind('SpeedReport', function () {
//            //
//        });
    }
}
