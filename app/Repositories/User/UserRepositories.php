<?php

namespace App\Repositories\User;

use App\Repositories\User\UserInterface;
use App\Models\User;

class UserRepositories implements UserInterface 
{
    public function getAllUsers() 
    {
        return User::all();
    }

    public function getUserById($UserId) 
    {
        return User::findOrFail($UserId);
    }

    public function deleteUser($UserId) 
    {
        User::destroy($UserId);
    }

    public function createUser(array $UserDetails) 
    {
        return User::create($UserDetails);
    }

    public function updateUser($UserId, array $newDetails) 
    {
        return User::whereId($UserId)->update($newDetails);
    }

    // public function getFulfilledOrders() 
    // {
    //     return User::where('is_fulfilled', true);
    // }
}
?>