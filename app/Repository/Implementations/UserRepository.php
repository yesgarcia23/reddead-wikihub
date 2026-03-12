<?php

namespace App\Repository\Implementations;

use App\Models\User;
use App\Repository\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{
    public function __construct(protected User $user)
    {}
   public function get()
   {
        return $this->user->all();
   }

   public function getById($id)
   {
        return $this->user->find($id);
   }

}