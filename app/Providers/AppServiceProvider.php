<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Facades\Information\Info;
use App\Facades\Example\example;

//use Illuminate\Support\Facades\App;
class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register()
  {
    // binding er 1st param service name & 2nd param function...
    // app()->bind('first_service_provider', function() {
    //     dd('this is my first service container'); // app() method...
    // });

    // $this->app->bind('second_service_provider', function() {
    //     dd('this is my second service container'); // $this->app properties...
    // });

    // App::bind('third_service_provider', function() {
    //     dd('this is my third service container'); // App facade...
    // });


    // $this->app->bind('my_class', function () {
    //     //return new MyClass($app);
    //     dd('my_class_service');
    // });

    $this->app->bind('Info', function ($app) {
      return new Info();
    });

    $this->app->bind('example', function ($pp) {
      return new example();
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