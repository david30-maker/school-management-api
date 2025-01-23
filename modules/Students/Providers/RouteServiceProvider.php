<?php

namespace Modules\Students\Providers;

use Illuminate\Support\ServiceProvider\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot() : void
    {
        $this->routes(routesCallback: function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path(path: 'routes/api.php'));

                Route::middleware('web')
                ->group(callback: __DIR__ . '/../routes.php');
        });
    }    
}