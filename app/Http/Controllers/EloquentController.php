<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Eloquent;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function show()
    {
        $test = Eloquent::all();
        return view('test', ['tests' => $test]);
    }
}
