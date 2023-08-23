<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//app()->bind('mim', Person::class);

// Route::get('/', function () {
//     //echo Sample::index();

//     // $name = app()->make('mim');
//     // $name->setName('lam');
//     // echo $name->getName();
//     //dd($name->getName());

    
//     //dd($name->getName());
//     //return view('welcome');
//     //die(get_class($person));
    
// });

//Route::get('/', [UserController::class, 'index'])->middleware('auth');

// Route::get('/user/{name?}', function (string $name = 'mam') {
//     return $name;
// });

// Route::get('/user/{id?}', function (string $id = '1') {
//     return 'User : '.$id;

// });

// Route::get('/user/{name?}', function (string $name = "jannat") {
//     return "user name: ". $name;
// });

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->where('id', '[1-9]');

// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->where('name', '[a-e]');


// Route::get('/user/{id}/{name}', function (string $id, string $name) {

//  return "use id: ".$id.' ,'." user name: ".$name;

// })->where(['id' => '[1-5]', 'name' => '[a-e]']);


// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return "use id: ".$id.' ,'." user name: ".$name;
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function (string $name) {
//     return 'user name: '.$name;
// })->whereAlphaNumeric('name');


// Route::get('/user/{id}', function (string $id) {
//     return 'user id: '.$id;
// })->whereUuid('id');

// Route::get('/category/{category}', function (string $category) {
//     return 'user category : '.$category;
// })->whereIn('category', ['song', 'lala', 'mama']);

// Route::get('/user/{id}', function(string $id) {
//     return 'user id '.$id;
// });

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');

// Route::get('/user/profile', function () {
//     // ...
// })->name('profile');


Route::get('/user/{id}/profile', function (string $id) {
    return $id;
})->name('profile');

$url = route('profile', ['id' => 1]);

Route::controller(UserController::class)->group(function () {
    Route::get('/user/{id}', 'show');
    Route::post('/users', 'store');
})

Route::middleware(['web'])->group(function () {
    Route::get('/', )
});

































