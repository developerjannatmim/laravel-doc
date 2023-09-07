<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index() // http response...

	{
		$cities = City::orderBy('id')->paginate(4);
	    return view('cities.index', compact('cities'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
	    return view('cities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
	    $request->validate([
	        'city_name' => 'required',
	    ]);
	    City::create($request->all());
	    return redirect()->route('cities.index')
	    ->with('Success', 'City created successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(City $city)
	{
	    return view('cities.show', compact('city'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(City $city)
	{
	    return view('cities.edit', compact('city'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, City $city)
	{
	    $request->validate([
	        'city_name' => 'required|max:50',
	    ]);

	    if( $city->update($request->all()) ) {
	    return redirect()->route('cities.index')
	    ->with('Success', 'city updated successfully');
	    }

	    //Log::channel('cityupdate')->info('city updated success');
	    return back()->withInput();

	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(City $city)
	{
	    $city->delete();
	    return redirect()->route('cities.index')
	    ->with('success','City deleted successfully');
	}


}
