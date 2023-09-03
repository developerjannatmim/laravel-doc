<?php

namespace App\Exceptions;

use Exception;

class UserNotFoundException extends Exception
{
    public function report()
    {
        \Log::debug('user not found');
    }
}
