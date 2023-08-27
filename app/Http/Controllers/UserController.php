<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\View\View;
use App\Http\viewComposers\categoryComposer;

class UserController extends Controller
{
  public function __construct()
  {

  }

  // public function index()
  // {
  //     // Invoice::companyName();
  //     // Sample::say();
  //     //App::get();

  // }

  // public function show(Request $request)
  // {
  //   if(auth()->user()->is_editor){

  //     return 'is editor';

  //   }
  //   return 'is not editor';

  // }

  public function index()
  {
    return view('greeting');
  }

  public function welcome()
  {

    return view('main');
  }
}