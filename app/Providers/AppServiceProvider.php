<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\Invoice;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app()->bind('Invoice', function($app) {
            return new Invoice();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
