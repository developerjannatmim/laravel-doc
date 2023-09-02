<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Facades\Example\exampleFacade;
use App\Facades\Information\InfoFacade;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AdminController;
// use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Facades\URL;
use Facades\App\Facades\Invoice;
use Illuminate\Support\Facades\Response;
use App\Person;
use App\Services\Transistor;
use Psr\Container\ContainerInterface;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

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


/* URL Test Start*/

// Route::get('/user',[UrlController::class, 'show']);

Route::get('/',[UrlController::class, 'show'])->name('home');
Route::get('/about',[UrlController::class, 'about'])->name('about');
Route::get('/about/{slug}',[UrlController::class, 'index'])->name('about.slug');
Route::get('post/{post}/comment/{comment}', function($post,$comment){
  return 'post';
})->name('post.comment');

Route::get('/secret', function(Request $request) {
//   if (! $request->hasValidSignature()) {
//     return 'home';
// }
  return 'This is a secret site';
})->name('secret')->middleware('signed');
/* URL Test End*/




// Route::get('/', function () {
//   return view('welcome');
// });
Route::get('/', function () {
  dd(compact());
  return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');


/*********  start Response *********/
// Route::get('/', function () {
//   return 'Hello World';
// });

// Route::get('/home', function () {
//   $type = 'text/plain';
//   $content = 'hello new world';
//   return response($content)
//   ->withHeaders([
//     'Content-Type' => $type,
//     'X-Header-One' => 'Header Value',
//     'X-Header-Two' => 'Header Value',
// ]);
// });

// Route::get('/user/{user}', function (User $user) {
//   return $user;
// });

// Route::get('/home', function () {
// $minutes = 60;

//   return response('Hello World')->cookie(
//     'name', 'value', $minutes
// );

//return Cookie::queue('name', 'value', $minutes);

// $cookie = cookie('name', 'value', $minutes);
// return response('Hello World')->cookie($cookie);

//Cookie::expire('name');

// });

// Route::get('/dashboard', function () {
//   return redirect('home');
// });

Route::resource('users', UserController::class);

// Route::get('/home', function() {
//   return redirect()->route('main');
// });

// Route::get('index', [UserController::class, 'index'])->name('index');
// Route::get('getalluser', [UserController::class, 'getalluser'])->name('getalluser');

// Route::get('/home', function() {
//   dd('hello world');
// });

// Route::get('users/{user:id}', function (User $user) {
//   return response()->json([
//     'user' => $user,
//   ]);
// });

// Route::get('/home', function(Request $request) {
// //   return response()->json([
// //     'name' => 'Abigail',
// //     'state' => 'CA',
// // ]);

// return response()
//   ->json(['name' => 'Abigail', 'state' => 'CA'])
//   ->withCallback($request->input('callback'));

// });

/*********  end Response *********/






/*********  start config method concept *********/
// Route::get('/con', function () {
//   config()->set('socialHandle.facebook.url' , 'https://www.facebook.com/jannatmim');
//   echo config()->get('socialHandle.facebook.url');
// });
/*********  end config method concept *********/




/*********  start Facade *********/
// Route::get('/invo', function () {
//   return Invoice::companyName();
// });

// Route::get('/cache', function () {
//   dd(Cache::shouldReceive('get')
//   ->with('key')
//   ->andReturn('value'));

//   //dd(Cache::get('key'));
// });

// Route::get('/info', function () {
//   return InfoFacade::example();
// });

// Route::get('/exam', function () {
//   return exampleFacade::test();
// });

/*********  end Facade *********/





/*********  start Service Provider *********/
// Route::get('/example', function () {
//   return view('example');

// });

// Route::get('/my-class', function () {
//   dd(app()->make('my_class'));

// });

// Route::get('/new', function () {
//   $geolocation = app(\App\Providers\GeolocationServiceProvider::class);
//   return $geolocation;
// });

/*********  end Service Provider *********/





/*********  start Service container *********/
// Route::get('/', function () {
// 	//return view('welcome');
// 	//dd(app());
// 	dd(app()->make('second_service_provider'));
// });

// Route::get('/test', function () {
// 	return 'test';
// });
/*********  end Service container *********/





/*********  start Route *********/

// Route::get('/user/{id}', function (Request $request, string $id) {
//     return 'User '.$id;
// });

// Route::get('/user/{name}/{id}', function(string $name, string $id) {
//     dd('here');
// })->where(['id' => '[1-9]', 'name' => '[a-e]']);

// Route::get('/user/{name?}', function (string $name = null) {
//   dd($name);
// });

// Route::get('/user/{name?}', function (string $name = 'John') {
//   return $name;
// });

// Route::get('/search/{search}', function (string $search) {
//   return $search;
// })->where('search', '.*');

// Route::get('/user/profile', function () {
//   dd('hi');
// })->name('profile');

// Route::prefix('admin')->group(function () {
//   Route::get('/users', function () {
//       // Matches The "/admin/users" URL
//       dd('hi');
//   });
// });

// Route::name('admin.')->group(function () {
//   Route::get('/users', function () {
//       // Route assigned name "admin.users"...
//       dd('hi');
//   })->name('users');
// });

// Route::get('/users/{id}', function (User $id) {
//   dd($id->name);
// });

// Route::get('/users/{user:id}', function (User $user) {
//   return $user; // slug means-: table's field name such as user table field name(id/name/email...)
// });

// Route::get('/product-test', [ProductController::class, 'index']);

// Route::get('/user', function () {
//   //dd(Route::current());
//   //dd(Route::currentRouteName());
//   //dd(Route::currentRouteAction());

// });

// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->name('dashboard');

// Route::get('/login', function () {
// 	return view('auth.login');
// })->name('login');

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

// Route::middleware(['throttle:uploads'])->group(function () {
//   Route::get('/audio', function () {
//       return 'hi';
//   });

//   Route::get('/video', function () {
//       // ...
//   });
// });

/*********  end Route *********/






/*********  start URL *********/
// Route::get('/greeting', function(){
//   return view('greeting');
// });

// Route::get('about/{slug?}', [UserController::class, 'index1'])->name('about-us');
// Route::get('post/{post}/comment/{comment}', function($post, $comment) {
//   //
// })->name('post.comment');


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

//Route::get(uri:'/test', action:App\Http\Controllers\TestController::class);

//Route::get('/', [ViewController::class, 'index']);
/*********  end URL *********/






/*********  start View *********/
// Route::get('/customer', function() {
// return view('components.customer');
// });

// Route::get('/main', function() {
//   return view('main');
//   });

//   Route::get('/welcome', function() {
//     return view('welcome');
//     });

// Route::get('/', function() {

//     return view('greeting')
//     ->with('name', 'mim')
//     ->with('occupation', 'teacher');

//     //return View::exists('custome.admin');
//     //return View::make('greeting', ['name' => 'everyone']);
//     //return view('greeting', ['name' => 'Mim']);
// });

// Route::get('/category/{title}', function (Category $category) {
//     return view('main');
//     //return view('main');
//     //$category = Category::all();
// })->name('main');

/*********  end View *********/






/********* start Controller *********/

// Route::resource('/users', UserController::class)
// ->missing(function (Request $request) {
//   return Redirect::route('dashboard');
//   //abort(404);
// });

// Route::get('/blog/{post}', [PostController::class, 'show'])
//      ->missing(function (Request $request) {
// 		// customize the view to add search bar, featured blog
//     return Redirect::route('posts.404_index');
// });

/***************** CRUD *****************/
//Route::resource('users', UserController::class)->withTrashed(['show']);
/***************** CRUD *****************/

// Route::get('/admin/one', [AdminController::class, 'index']);
// Route::get('/ad', [AdminController::class, 'index']);
// Route::get('/house', [AdminController::class, 'index1']);
// Route::get('/', [AdminController::class, 'index3']);

// Route::get('/user/{id}', [ViewController::class, 'show']);
/*********  end Controller *********/





/*********  start Middleware *********/
// Route::get('/user/{id}', function (string $id) {
//   dd('admin has a roll');
// })->middleware('role:is_admin');

// Route::get('/admin', function() {
//     dd('admin page');
// })->middleware([Admin::class, Authenticate::class]);

// Route::get('/editor', function() {
//     dd('editor has a roll');
// })->middleware(['editor','auth']);

// Route::get('/greeting', function() {
//   dd('editor has a roll');
// });

// Route::get('/main', function() {
//   dd('editor has a roll');
// });

// Route::middleware([EnsureTokenIsValid::class])->group( function() {
// Route::get('/test', function() {
//   //
// });
// Route::get('/toast', function() {
//   //
// })->withoutMiddleware([EnsureTokenIsValid::class]);
// });

// Route::get('/user', function() {
// dd('hi');
// })->middleware([Admin::class, Authenticate::class]);

// Route::middleware(['admin'])->group(function () {
// 	Route::get('/main', function () {
// 		dd('hello');
// 	});
// });

// Route::middleware(['admin'])->group(function () {
// 	Route::get('/main', function () {
// 		dd('hello');
// 	});
// });

// Route::get('/login', function () {
// 	return view('auth.login');
// })->name('login');


// Route::group(['middleware' => ['auth', 'admin']], function() {
//     Route::get('/admin', [AdminController::class, 'index']);

// });

// Route::get('/admin', [AdminController::class, 'index']);


// Route::put('/user/{id}', function(string $id) {
//     dd('user id: '.$id.', '.'has an editor and has a roll');
// })->middleware(['editor','auth']);
/*********  end Middleware *********/





/*********  start Validation *********/
Route::resource('posts', PostController::class);
/*********  end  Validation *********/





//************* Breeze packages

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
