<?php

namespace App\Providers;

use App\Services\Contracts\AccountingCrudInterface;
use App\Services\Contracts\ManagerCrudInterface;
use App\Services\Contracts\ToursCrudInterface;
use App\Services\Contracts\UserCrudInterface;
use App\Services\CrudService\AccountingRepositery;
use App\Services\CrudService\CrudRepository;
use App\Services\CrudService\ManagerRepositery;
use App\Services\CrudService\ToursRepositery;
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
        $this->app->bind(ManagerCrudInterface::class, ManagerRepositery::class);
        $this->app->bind(AccountingCrudInterface::class, AccountingRepositery::class);
        $this->app->bind(ToursCrudInterface::class, ToursRepositery::class);
    }
}
