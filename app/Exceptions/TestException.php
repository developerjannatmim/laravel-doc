<?php

namespace App\Exceptions;

class TestException extends CustomeException
{

    public static function oopsDaisy(): TestException
    {
        return new self(message: 'Oops daisy', code: 403);
    }

    public static function siteIsDown(): TestException
    {
        return new self(message: 'site is down. plz try again later', code: 500);
    }









}