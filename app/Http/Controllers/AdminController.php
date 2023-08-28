<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth','admin']);
    // }

    public function index(Request $request)
    {
        if($request->is('admin/*')){
            return response('cookie expired')->withoutCookie('name');
        };
        return response('cookie is not expired')->withCookie('cookie_name');


    }

    public function index1()
    {
    //     dd(response());
    //     return response()
    //     ->withHeaders('Content-Type', )
    //     ->header('X-Header-Name-one', 'Header-value')
    //     ->header('X-Header-Name-two', 'Header-value');

    $minutes = date('Y/m/d');
    return response('Hello World')->cookie(
        'name', 'value', $minutes
    );

    }

    public function index3()
    {
        return redirect();
    }
}
