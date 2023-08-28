<?php

namespace App\Http\Controllers;
use Facades\App\Facades\Invoice;

class UserController extends Controller
{

  public function index()
  {
    return Invoice::companyName();
  }


}
