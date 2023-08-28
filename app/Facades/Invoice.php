<?php

namespace App\Facades;
use Carbon\Carbon;

class Invoice
{
  public function companyName() {
    return "ABC Company";
  }

  public function currentDate() {
    return Carbon::now()->format('Y-m-d');
  }
}