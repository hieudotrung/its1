<?php

namespace App\Contracts\Repositories;

interface TopicRepository extends AbstractRepository
{
	public function filter(array $data, $limit = 15, $fields = ['*']);

	public function getList(array $data, $limit = 15, $field = ['*']);
}