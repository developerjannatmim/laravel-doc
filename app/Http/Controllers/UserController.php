<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function autocompleteSearch(Request $request)
    {
			if($request->filled('search')){
				$users = User::search($request->search)->get();
			}else{
				$users = User::get();
			}
			return view('users.index', compact('users'));
            
		}

    public function index()
    {
        $users = User::latest()->paginate(5);
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
