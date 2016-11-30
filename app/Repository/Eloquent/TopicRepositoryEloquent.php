<?php 

namespace App\Repository\Eloquent;

use App\Topic;
use App\Contracts\Repositories\TopicRepository;

class TopicRepositoryEloquent extends AbstractRepositoryEloquent implements TopicRepository
{
    public function __construct(Topic $model)
    {
        parent::__construct($model);
    }
}