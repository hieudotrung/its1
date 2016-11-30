<?php 

namespace App\Repository\Eloquent;

use App\User;
use App\Contracts\Repositories\UserRepository;

class UserRepositoryEloquent extends AbstractRepositoryEloquent implements UserRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function filter(array $data, $limit = 15, $fields = ['*'])
    {
        $query = $this->newQuery();

        if (isset($data['name']) && $data['name']) {
            $query->orWhere('name', $data['name']);
        }

        if (isset($data['keyword']) && $data['keyword']) {
            $query->orWhere('username', $data['keyword']);
            $query->orWhere('email', $data['keyword']);
        }

        return $query->orderBy('id', 'DESC')->paginate($limit, $fields);
    }

    public function getList(array $data, $limit = 15, $fields = ['*'])
    {
        if (isset($data['filter'])) {
            return $this->filter($data, $limit, $fields);
        } else {
            return $this->paginate($limit, $fields);
        }
    }
}