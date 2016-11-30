<?php

namespace App\Jobs\User;

use App\Jobs\Job;
use App\Contracts\Repositories\UserRepository;

class StoreJob extends Job
{
	protected $data;

	public function __construct(array $data)
	{
		$this->data = $data;
	}

	public function handle(UserRepository $users)
	{
		$this->data['password'] = bcrypt($this->data['password']);
		
		$users->store($this->data);
	}
}