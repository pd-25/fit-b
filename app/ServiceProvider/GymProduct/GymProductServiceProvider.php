<?php

namespace App\ServiceProvider\GymProduct;

use App\Repositories\GymProduct\GymProductInterface;
use App\Repositories\GymProduct\GymProductRepository;
use Illuminate\Support\ServiceProvider;

class GymProductServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind(GymProductInterface::class, GymProductRepository::class);
    }

    
    public function boot()
    {
        //
    }
}
