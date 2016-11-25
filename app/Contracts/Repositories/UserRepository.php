<?php

namespace App\Contracts\Repositories;

interface UserRepository
{
    public function getAll();

    public function getById($id);

    public function create(array $attribute);

    public function update($id, array $attribute);

    public function delete($id);
}