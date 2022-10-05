<?php

namespace Companybase\Providers;

use Illuminate\Support\ServiceProvider;

use Companybase\Repositories\Eloquents\TagRepository;
use Companybase\Repositories\Contracts\TagRepositoryInterface;

use Companybase\Repositories\Eloquents\UserRepository;
use Companybase\Repositories\Contracts\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(TagRepositoryInterface::class,TagRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

