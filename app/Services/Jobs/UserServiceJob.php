<?php

namespace App\Services\Jobs;

use App\Contracts\Services\UserService;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\User\StoreUser;
use App\Jobs\User\UpdateUser;
use App\Jobs\User\DeleteUser;
use App\Jobs\User\DestroyUser;

class UserServiceJob extends AbstractServiceJob implements UserService
{
    public function store(array $data)
    {
        return $this->dispatch(new StoreUser($data));
    }

    public function update(Model $model, array $data)
    {
        return $this->dispatch(new UpdateUser($model, $data));
    }

    public function delete(Model $model)
    {
        return $this->dispatch(new DeleteUser($model));
    }

    public function destroy(array $id)
    {
        return $this->dispatch(new DestroyUser($id));
    }
}
