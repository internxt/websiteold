<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('env', function ($environment) {
            return app()->environment($environment);
        });

        Blade::if('ifCurrentRouteIs', function ($name) {
            return Route::currentRouteName() == $name;
        });

        Blade::if('ifCurrentRouteStartsWith', function ($name) {
            return starts_with(Route::currentRouteName(), $name);
        });

        Blade::directive('activeIfCurrentRouteIs', function ($name) {
            return '<?php if(Route::currentRouteName() == ' . $name . '){ echo \'active\'; }?>';
        });

        Blade::directive('activeIfCurrentRouteStartsWith', function ($name) {
            return '<?php if( starts_with(Route::currentRouteName(), ' . $name . ') ){ echo \'active\'; }?>';
        });

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
