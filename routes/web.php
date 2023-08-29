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
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Facades\URL;
use App\Facades\Invoice;
use Illuminate\Support\Facades\Response;
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
/***  start Service Provider ***/
Route::get('/example', function () {
	return view('example');

});

Route::get('/my-class', function () {
	dd(app()->make('my_class'));

});

Route::get('/new', function() {
	$geolocation = app(\App\Providers\GeolocationServiceProvider::class);
	return $geolocation;
});

Route::get('/', function () {
	return view('welcome');
});
// Route::middleware(['admin'])->group(function () {

// 	Route::get('/main', function () {
// 		dd('hello');
// 	});

// });

// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->name('dashboard');

// Route::get('/login', function () {
// 	return view('auth.login');
// })->name('login');


/***  end Service Provider ***/



/***  start Service container ***/
// Route::get('/', function () {
// 	//return view('welcome');
// 	//dd(app());
// 	dd(app()->make('second_service_provider'));
// });

// Route::get('/test', function () {
// 	return 'test';
// });
/***  end Service container ***/


/***  start Route ***/
// Route::middleware(['admin'])->group(function () {

// 	Route::get('/main', function () {
// 		dd('hello');
// 	});

// });

// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->name('dashboard');

// Route::get('/login', function () {
// 	return view('auth.login');
// })->name('login');
/***  end Route ***/


//Route::get(uri:'/test', action:App\Http\Controllers\TestController::class);

//Route::get('/', [UserController::class, 'index']);




//$category = App\Models\Category::find(1);
//dd(url('/category/{$category->id}'));
//dd(url()->current());
//dd(url()->full());
//dd(url()->previous());
// echo (URL::current());
// echo (URL::full());
// echo (URL::previous());

// Route::get('/', function () {
// 	return view('welcome');
// });
// Route::get('/main', function () {
// 	return view('main');
// });

// Route::get('/greeting', function () {
// 	return view('greeting');
// });

// Route::get('/category/{title}', function (Category $category) {
//     return view('main');
//     //return view('main');
//     //$category = Category::all();
// })->name('main');

/***  start View ***/
// Route::get('/', function() {

//     return view('greeting')
//     ->with('name', 'mim')
//     ->with('occupation', 'teacher');

//     //return View::exists('custome.admin');
//     //return View::make('greeting', ['name' => 'everyone']);
//     //return view('greeting', ['name' => 'Mim']);
// });
/***  end View ***/






// Route::get('/', function () {
//     $array = ['Post title', 2022,04,5, 'Author name'];
//     $slug = Arr::arrayToSlug($array);
//     dd($slug);
//     return view('welcome');
// });

//Route::get('/admin', NewController::class);

// Route::get('/home', function() {
//     return response('hello world', 200)
//     ->header('Content-Type', 'text/plain');
// });

// Route::get('/user', function() {
//     return redirect('admin')->with('status', 'successfull!');
// });


// Route::get('/admin/one', [AdminController::class, 'index']);
// Route::get('/ad', [AdminController::class, 'index']);
// Route::get('/house', [AdminController::class, 'index1']);
// Route::get('/', [AdminController::class, 'index3']);

// Route::get('/user/{id}', [UserController::class, 'show']);





/***  start Middleware ***/
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

// Route::put('/user/{id}', function(string $id) {
//     dd('user id: '.$id.', '.'has an editor and has a roll');
// })->middleware(['editor','auth']);
/***  end Middleware ***/

// Route::get('/user/{name}/{id}', function(string $name, string $id) {
//     dd('here');
// })->where(['id' => '[1-9]', 'name' => '[a-e]']);




//*************

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

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
