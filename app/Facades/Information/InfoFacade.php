<?php
namespace App\Facades\Information;
use Illuminate\Support\Facades\Facade;

class InfoFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Info';
    }
}