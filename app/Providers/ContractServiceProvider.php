<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            \App\Contracts\Repositories\UserRepository::class,
            \App\Repositories\Eloquent\UsertRepositoryEloquent::class
        );
    }

    public function register()
    {
        $this->app->singleton(
            \App\Contracts\Services\UserService::class,
            \App\Services\Jobs\UserServiceJob::class
        );
    }
}