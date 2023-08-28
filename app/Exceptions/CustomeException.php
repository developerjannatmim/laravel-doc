<?php

namespace App\Exceptions;
use Exception;

class CustomeException extends Exception
{
    public static function internalException(): static
    {
        return new static(message: "An internatl exception is occured", code:500 );
    }

}

