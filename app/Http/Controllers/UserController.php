<?php

namespace App\Http\Controllers;

use App\Exceptions\MyCustomException;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
//use App\Http\Requests\PostStoreRequest;
use App\Services\UsersService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

//test URL
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
	// /**
	//  * Display a listing of the resource.
	//  */

	public function newUser()
	{
		$newUser = DB::table('users')->insertGetId(
			[
				'name' => 'john',
				'email' => 'john@gmail.com',
				'age' => 25,
				'city' => 'khulna',
				'password' => 12345678
			]
		);
		// return response()->json([
		// 	$newUser,
		// ]);

		if ($newUser) {
			echo "<h1>data added successfully.</h1>";
		} else {
			echo "<h1>data added failed.</h1>";
		}
	}

	public function updateUser()
	{
		$updateUser = DB::table('users')
			->where('id', 1)
			->update(
				[
					'name' => 'lab',
					'email' => 'lab@gmail.com',
					'age' => 45,
					'city' => 'dhaka'
				],
			);

		if ($updateUser) {
			echo "<h1>data updated successfully.</h1>";
		} else {
			echo "<h1>data updated failed.</h1>";
		}

		// return response()->json([
		//     'user updated' => $updateUser,
		// ]);
	}

	public function deleteUser(string $id)
	{
		$deleteUser = DB::table('users')
			->where('id', $id)
			->delete();

		if ($deleteUser) {
			return redirect()->back()->with(['message' => 'user deleted successfully']);
		} else {
			return 'user not found';
		}

		// if ($deleteUser) {
		// 	echo "<h1>data deleted successfully.</h1>";
		// } else {
		// 	echo "<h1>data deleted failed.</h1>";
		// }

		// 	return response()->json([
		// 	'user deleted' => $deleteUser,
		// ]);

	}

	public function showUsers()
	{
		$users = DB::table('users')
		->orderBy('id')
		->cursorPaginate(3);

		return view('allusers', ['data' => $users]);

		// $users = DB::table('users')
		// ->crossJoin('posts')
		// ->get();

		// $users = DB::table('users')
		// 	->join('posts', function (JoinClause $join) {
		// 		$join->on('users.id', '=', 'posts.user_id')
		// 			->where('posts.user_id', '>', 5);
		// 	})
		// 	->get();

		// return response()->json([
		// 	$users,
		// ]);

	}

	public function singleUser(string $id)
	{
		$user = DB::table('users')->where('id', $id)->get();
		//return $user;
		return view('singleuser', ['data' => $user]);
	}
















	// // public function search(Request $request) //general exception by using controller....
	// // {
	// //     try
	// //     {
	// //         $user = User::findOrFail($request->input('id'));
	// //     }catch (ModelNotFoundException $exception)
	// //     {
	// //         return back()->withError('user not found')->withInput();
	// //     }
	// //     return view('users.search', compact('user'));
	// // }

	// private $userService; //exception by using custom UsersService class...

	// public function __construct(UsersService $userService)
	// {
	//     $this->userService = $userService;
	// }

	// private $userService; //exception by using custom UsersService class...

	// public function __construct(UsersService $userService)
	// {
	//     $this->userService = $userService;
	// }

	// public function index1(Request $request, $slug) // http response...

	// {
	//     return 'all users from others';
	// }

	// public function index1(Request $request, $slug) // http response...

	// {
	//     return 'all users from others';
	// }

	// public function demo($name)
	// {
	//     return 'Hello : ' . $name;
	// }

	// public function getalluser() // http response...
	// {
	//     //return redirect()->route('index');
	//     //return to_route('index');
	//     //return redirect('index');
	//     return redirect()->away('https://www.google.com');
	// }
	// /**
	//  * Show the form for creating a new resource.
	//  */
	// public function create()
	// {
	//     return view('users.create');
	// }

	// /**
	//  * Store a newly created resource in storage.
	//  */
	// public function store(Request $request)
	// {
	//     $request->validate([
	//         'name' => 'required',
	//         'email' => 'required',
	//         'password' => 'required',
	//     ]);
	//     User::create($request->all());
	//     return redirect()->route('users.index')
	//     ->with('Success', 'User created successfully.');
	// }

	// /**
	//  * Display the specified resource.
	//  */
	// public function show(User $user)
	// {
	//     return view('users.show', compact('user'));
	// }

	// /**
	//  * Show the form for editing the specified resource.
	//  */
	// public function edit(User $user)
	// {
	//     return view('users.edit', compact('user'));
	// }

	// /**
	//  * Update the specified resource in storage.
	//  */
	// public function update(Request $request, User $user)
	// {
	//     $request->validate([
	//         'name' => 'required|max:5',
	//         'email' => 'required|email',
	//     ]);

	//     if( $user->update($request->all()) ) {
	//     return redirect()->route('users.index')
	//     ->with('Success', 'User updated successfully');
	//     }

	//     \Log::channel('userupdate')->info('user updated success');
	//     return back()->withInput();

	// }

	// /**
	//  * Remove the specified resource from storage.
	//  */
	// public function destroy(User $user)
	// {
	//     $user->delete();
	//     return redirect()->route('users.index')
	//     ->with('success','User deleted successfully');
	// }



















	
	//Validation

	// public function store(StorePostRequest $request)
	// {
	//     User::create($request->all());
	//     return redirect('welcome')->with('success', 'successfull');
	// }
}