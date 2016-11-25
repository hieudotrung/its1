<?php 

namespace App\Repository\Eloquent;

use App\User;
use App\Contracts\Repositories\UserRepository;

class UserRepositoryEloquent implements UserRepository
{
    private $model;

    public function __construct(User $model){
        $this->model = $model;
    }

    public function getAll()
    {
        $data = $this->model->where('id','<',10)->get();
        return view('backend.user.list_user', compact('data'));
    }

    public function getById($id)
    {
        return $this->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attribute);
    }

    public function update($id, array $attributes)
    {
        $a = $this->model->findOrFail($id);
        $a->update($attributes);
        return $a;
    }

    public function delete($id)
    {
        $this->getById($id)->delete($id);
        return true;
    }
}