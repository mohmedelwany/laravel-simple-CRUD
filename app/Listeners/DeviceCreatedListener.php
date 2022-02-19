<?php

namespace App\Listeners;

use App\Events\DeviceCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DeviceCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DeviceCreatedEvent  $event
     * @return void
     */
    public function handle(DeviceCreatedEvent $event)
    {
        Log::info("We are calling Created listener ". $event->device);
    }
}
