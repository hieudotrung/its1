<?php

namespace App\Contracts\Services;

use Illuminate\Database\Eloquent\Model;

interface AbstractService
{
    public function store(array $data);

    public function update(Model $model, array $data);

    public function delete(Model $model);

    public function destroy(array $id);
}