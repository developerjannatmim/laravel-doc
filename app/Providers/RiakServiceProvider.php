<?php

namespace App\Providers;

use Illuminate\Services\Riak\Connection;
use Illuminate\Support\ServiceProvider;
use Iluminate\Contracts\Foundation\Application;
use Iluminate\Contracts\Support\DeferableProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->singleton(Connection::class, function (Application $app) {
        return new Connection($app['config'],['riak']);
       });
    }

    public function provides(): arry
    {
        return[Connection::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
