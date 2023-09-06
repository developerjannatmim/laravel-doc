<?php

namespace App\Http\Controllers;

use App\Models\Publics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        $public = Publics::orderBy('id', 'asc')->get();
        return view('public.index', compact('public'));
    }

    public function create()
    {
        return view('public.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        Publics::create($request->all());

        // $public = new Publics;
        // $public->name = $request['name'];
        // $public->email = $request['email'];
        // $public->age = $request['age'];
        // $public->city = $request['city'];
        // $public->address = $request['address'];
        // $request->public();
        // $public->save();
        return redirect()->route('public.index')->with(['success' => 'data added successfully']);
    }
    
    public function edit()
    {
        return view('public.edit');
    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }

    
}
