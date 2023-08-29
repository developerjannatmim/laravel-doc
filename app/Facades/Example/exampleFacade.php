<?php
namespace App\Facades\Example;
use Illuminate\Support\Facades\Facade;

class exampleFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'example';
    }
}