<?php

namespace App\Http\Controllers;

use Facades\App\Facades\Invoice;
use Illuminate\Support\Facades\App;
use Facades\App\Sample;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function __construct()
  {

  }

  public function index()
  {
      // Invoice::companyName();
      // Sample::say();
      //App::get();
  }
}
