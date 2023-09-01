<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class UrlController extends Controller
{

  public function show()
  {
    return view('welcome');
      // $user = User::find(1);
      // echo url("/users/{$user->id}");
      // echo url()->current();
      // echo url()->previous();
      // echo URL::previous();
      // echo route('user.show', ['user' => 1999, 'search' => 'rocket']);
      // echo route('user.show', ['user' => $user]);
      // return view('users.show', compact('user'));

      // return URL::signedRoute('unsubscribe', ['user' => 1]);
  }

  public function index($slug)
  {
    return view('example');
  }

  public function about()
  {
    return view('example');
  }

  public 

}
