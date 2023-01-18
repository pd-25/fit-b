<?php

namespace App\ServiceProvider\User;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepositories;
class UserserviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserInterface::class,UserRepositories::class);
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
