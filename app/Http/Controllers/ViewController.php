<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Facades\App\Facades\Invoice;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ViewController extends Controller
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
