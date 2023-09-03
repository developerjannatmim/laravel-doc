<?php

namespace App\Exceptions;

use Exception;

class MyCustomException extends Exception
{
    protected $message = 'This is an error!!';
}
