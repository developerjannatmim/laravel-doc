<?php

namespace App\Http\Controllers;

use App\Models\Publics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function index()
	{
		$publics = Publics::orderBy('id')->paginate(5);
		return view('public.index', compact('publics'));
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
			'password' => 'required',
			'age' => 'required',
			'city' => 'required',
			'address' => 'required'
		]);

		Publics::create($request->all());
		return redirect()->route('public.index')
		->with(['message' => 'data added successfully']);

	}

	public function show(Publics $public)
	{
		return view('public.show', compact('public'));
	}

	public function edit(Publics $public)
	{
		return view('public.edit', compact('public'));
	}


	public function update(Request $request, Publics $public)
	{
		$request->validate([
			'name' => 'required|max:30',
			'email' => 'required|email|max:20',
			'age' => 'required',
			'city' => 'required',
			'address' => 'required'
		]);

		if( $public->update($request->all()) ) {
	    return redirect()->route('public.index')
	    ->with('Success', 'public updated successfully');
	    }

	}

	public function destroy(Publics $public)
	{
		$public->delete();
		return redirect()->back()->with(['success' => 'deleted successfully']);

	}

}
