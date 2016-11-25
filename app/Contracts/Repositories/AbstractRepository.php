<?php

namespace App\Contract\Repositories;

use Illuminate\Database\Eloquent\Model;

interface AbstractRepository 
{
    public function countAll();

    public function with(array $withs);

    public function all($fields = ['*']);

    public function first($fields = ['*']);

    public function paginate($limit = 15, $fields = ['*']);

    public function find($id, $fields = ['*']);

    public function findOrFail($id, $fields = ['*']);

    public function findBy($field, $value, $fields = ['*']);

    public function getBy($field, $value, $fields = ['*']);

    public function store(array $data);

    public function update(Model $model, array $data);

    public function delete(Model $model);

    public function destroy($ids);
} 
