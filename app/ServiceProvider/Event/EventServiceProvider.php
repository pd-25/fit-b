<?php

namespace App\ServiceProvider\Event;

use App\Repositories\Event\EventInterface;
use App\Repositories\Event\EventRepository;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        $this->app->bind(EventInterface::class,EventRepository::class);
    }

}
