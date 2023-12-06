<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Repositories\MenuRepository;
use App\Services\MenuService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(MenuRepositoryInterface::class, MenuRepository::class);

        //Service Register
        $this->app->bind(MenuService::class, MenuService::class);

        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
