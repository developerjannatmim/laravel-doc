<?php

namespace App\Http\Controllers;
use Facades\App\Facades\Invoice;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class UserController extends Controller
{

  public function index()
  {
    return Invoice::companyName();
  }

  public function showCategory(string $id): View
  {
		$user = Cache::get('user:'. $id);

		return view('main', ['user' => $user]);
  }


}
