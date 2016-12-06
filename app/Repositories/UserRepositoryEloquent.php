<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepository;
use App\User;

class UserRepositoryEloquent extends AbstractRepositoryEloquent implements UserRepository
{
    public function __construct(User $userModel)
    {
        parent::__construct($userModel);
    }
}
