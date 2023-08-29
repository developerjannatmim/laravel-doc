<?php

namespace App\Providers;

use App\Geolocation;
use App\Sevices\Map;
use App\Services\Satelite;
use Illuminate\Support\ServiceProvider;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(Geolocation::class, function($app) {
            $map = new Map();
            $satelite = new Satelite();
            return new Geolocation($map, $satelite);

        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
