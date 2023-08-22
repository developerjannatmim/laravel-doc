<?php

use Illuminate\Support\Facades\Route;
use App\Person;
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

app()->bind('mim', Person::class);

Route::get('/', function (Person $person) {
    $name = app()->make('mim');
    $name->setName('lam');
    echo $name->getName();
    //dd($name->getName());

    
    //dd($name->getName());
    //return view('welcome');
    //die(get_class($person));
    
});
