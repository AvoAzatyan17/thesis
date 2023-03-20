<?php

namespace App\Providers;

use App\Services\Contracts\UserCrudInterface;
use App\Services\CrudService\CrudRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrap();
        $this->app->bind(UserCrudInterface::class, CrudRepository::class);
    }
}
