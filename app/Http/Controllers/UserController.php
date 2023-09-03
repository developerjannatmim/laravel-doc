<?php

namespace App\Http\Controllers;

use App\Exceptions\MyCustomException;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Services\UsersService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

//test URL
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function search(Request $request) //general exception by using controller....
    // {
    //     try
    //     {
    //         $user = User::findOrFail($request->input('id'));
    //     }catch (ModelNotFoundException $exception)
    //     {
    //         return back()->withError('user not found')->withInput();
    //     }
    //     return view('users.search', compact('user'));
	// }

    private $userService; //exception by using custom UsersService class...

    public function __construct(UsersService $userService)
    {
        $this->userService = $userService;
    }

    public function search(Request $request)
    {
        try{
            $user = $this->userService->search($request->input('id'));
        }catch (ModelNotFoundException $e)
        {
            return back()->withError($e->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
    }

    public function index()
    {
        //throw new MyCustomException();
        $users = User::orderBy('id', 'asc')->paginate(5);
        return view('users.index', compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index1(Request $request, $slug) // http response...

    {
        return 'all users from others';
    }

    public function getalluser() // http response...
    {
        //return redirect()->route('index');
        //return to_route('index');
        //return redirect('index');
        return redirect()->away('https://www.google.com');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('users.index')
        ->with('Success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:5',
            'email' => 'required|email',
        ]);

        if( $user->update($request->all()) ) {
        return redirect()->route('users.index')
        ->with('Success', 'User updated successfully');
        }

        \Log::channel('userupdate')->info('user updated success');
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('success','User deleted successfully');
    }
}
