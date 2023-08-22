<?php

namespace App\Facades;
use Illuminate\Support\Facades;

class InvoiceFacade extends Facade
{
  protected static function  getFacadeAccessor(){
    return 'Invoice';
  }
}