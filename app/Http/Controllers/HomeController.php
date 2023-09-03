<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return back()->with('success', 'successfull');

    }
}
