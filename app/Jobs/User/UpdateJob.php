<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\User; 
use App\Contracts\Repositories\UserRepository;

class UpdateJob extends Job
{
    public function __construct(User $user, array $data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    public function handle(UserRepository $users)
    {
        $this->data['password'] = bcrypt($this->data['password']);

        $users->update($this->user, $this->data);
    }
}
