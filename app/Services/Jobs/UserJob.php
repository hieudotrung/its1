<?php 

namespace App\Services\Jobs;

use App\Jobs\User\StoreJob;
use App\Jobs\User\UpdateJob;
use App\Jobs\User\DeleteJob;
use App\Contracts\Services\UserService;
use Illuminate\Database\Eloquent\Model;

class UserJob extends AbstractServiceJob implements UserService
{
	public function store(array $data)
	{
		$this->dispatch(new StoreJob($data));
	}

	public function update(Model $model, array $data)
	{
		$this->dispatch(new UpdateJob($model, $data));
	}

	public function delete(Model $model)
	{
		$this->dispatch(new DeleteJob($model));
	}
}