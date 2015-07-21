<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Demo;
use App\Repository\DemoService;

class BasicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        echo "This is BasicServiceProvider";

        $this->app->bind('Demo', function(){// Khai báo 1 Service Provider có tên là Demo.
            return new Demo();// Trả về giá trị khi người dùng gọi Service này.
        });

        $this->app->bind('UseDemo', function(){// Khai báo 1 Service Provider có tên là UseDemo.
            return $this->app->make('Demo');// Trả về giá trị của 1 Service Provider khác.
        });

        $this->app->singleton('DemoServiceHello', function(){
            return new DemoService();
        });
    }
}
