<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Facades\Invoice;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Arr::macro('arrayToSlug', function(Array $array) {
        //     $string = implode(' ', $array);
        //     $slug = Str::slug($string);
        //     return $slug;
        // });

        //View::share( 'tax', '25%' );
        View::composer('*', function($view) {
            $text = 'This is Me';
            $view->with('text', $text);
        });
    }
}
