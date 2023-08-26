<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/admin', NewController::class);

// Route::get('/home', function() {
//     return response('hello world', 200)
//     ->header('Content-Type', 'text/plain');
// });

Route::get('/user', function() {
    return redirect('admin')->with('status', 'successfull!');
});


// Route::get('/admin/one', [AdminController::class, 'index']);
// Route::get('/ad', [AdminController::class, 'index']);
// Route::get('/house', [AdminController::class, 'index1']);
// Route::get('/', [AdminController::class, 'index3']);

// Route::get('/user/{id}', [UserController::class, 'show']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/admin', function() {
//     dd('admin page');
// })->middleware([Admin::class, Authenticate::class]);

// Route::group(['middleware' => ['auth', 'admin']], function() {
//     Route::get('/admin', [AdminController::class, 'index']);

// });

// Route::get('/admin', [AdminController::class, 'index']);

// Route::get('/editor', function() {
//     dd('editor has a roll');
// })->middleware(['editor','auth']);


// Route::get('/user/{name}/{id}', function(string $name, string $id) {
//     dd('here');
// })->where(['id' => '[1-9]', 'name' => '[a-e]']);


// Route::put('/user/{id}', function(string $id) {
//     dd('user id: '.$id.', '.'has an editor and has a roll');
// })->middleware(['editor','auth']);

//************* 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
