<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    //     App::bind('Invoice',function()
    //   {
    //      return new \App\Facades\Invoice;
    //   });
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
