<?php

namespace App\Jobs\User;

use App\Contracts\Repositories\UserRepository;
use App\Jobs\Job;

class StoreUser extends Job
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle(UserRepository $user)
    {
        $this->data['password'] = bcrypt($this->data['password']);

        $user->create($this->data);
    }
}