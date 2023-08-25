<?php

namespace App\Facades;
use Illuminate\Support\Facades\facade;

class InvoiceFacade extends Facade
{
  public static function  getFacadeAccessor(){
    return 'Invoice';
  }
}