<?php
namespace App\Repositories\Event;

interface EventInterface {
    public function storeEvent(array $eventData, array $subEventData);
}