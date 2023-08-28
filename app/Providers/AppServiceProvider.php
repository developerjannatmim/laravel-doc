<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\App;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        // binding er 1st param service name & 2nd param function...
        app()->bind('first_service_provider', function() {
            dd('this is my first service container'); // app() method...
        });

        $this->app->bind('second_service_provider', function() {
            dd('this is my second service container'); // $this->app properties...
        });

        App::bind('third_service_provider', function() {
            dd('this is my third service container'); // App facade...
        });


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
        // View::composer('*', function($view) {
        //     $text = 'This is Me';
        //     $view->with('text', $text);
        // });
    }
}
