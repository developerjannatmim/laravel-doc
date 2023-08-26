<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewController;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin');
    }
}
