<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register V1 routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "v1" middleware group. Make something great!
|
*/


Route::get('/v1', function() {
 //return "V1 Amar World";
 return view('example');
 
});









