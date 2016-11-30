<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\User;
use App\Contracts\Repositories\UserRepository;

class DeleteJob extends Job
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function handle(UserRepository $users)
	{	
		$users->delete($this->user);
	}
}