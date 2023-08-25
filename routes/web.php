<?php

use App\Facades\Invoice;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Person;
use App\Services\Transistor;
use Psr\Container\ContainerInterface;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// class Customer
// {

// }

//app()->bind('mim', Person::class);
// Route::get('/cache', function () {
    // return Response::json([
    // ])
    //or
    // return response()->json([
    // ]);
    // return Cache::get('key');
    //echo Invoice::currentDate();
    // $name = app()->make('mim');
    // $name->setName('lam');
    // echo $name->getName();
    // //dd($name->getName());
    //dd($name->getName());
    //return view('welcome');
    //die(get_class($person));

    Route::get('/', function(ContainerInterface $container){
        // $service = $container->get(Transistor::class);
        return view('welcome');
    });

