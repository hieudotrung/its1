<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            \App\Contracts\Repositories\UserRepository::class,
            \App\Repository\Eloquent\UserRepositoryEloquent::class
        );
        $this->app->singleton(
            \App\Contracts\Repositories\TopicRepository::class,
            \App\Repository\Eloquent\TopicRepositoryEloquent::class
        );
    }

    public function register()
    {
        $this->app->singleton(
            \App\Contracts\Services\UserService::class,
            \App\Services\Jobs\UserJob::class
        );

        $this->app->singleton(
            \App\Contracts\Services\TopicService::class,
            \App\Services\Jobs\TopicJob::class
        );
    }
}