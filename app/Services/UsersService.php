<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
/**
 * Class UsersService.
 */
class UsersService
{
    public function search($id)
    {
        $user = User::find($id);
        if(!$user)
        {
            throw new ModelNotFoundException("ID: " . $id . ' not found');
        }
        return $user;
    }
}
