<?php

namespace Modules\Students\Providers;

use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    public function register()
{
    $this->app->register(\Modules\Students\Providers\StudentServiceProvider::class);
}



    public function boot() : void
    {
         $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
         $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', key: 'students');
         
         $this->app->register(RouteServiceProvider::class);
    }
}