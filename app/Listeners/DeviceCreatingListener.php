<?php

namespace App\Listeners;

use App\Events\DeviceCreatingEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DeviceCreatingListener
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
     * @param  \App\Events\DeviceCreatingEvent  $event
     * @return void
     */
    public function handle(DeviceCreatingEvent $event)
    {
        Log::info("We are calling from listener ". $event->device);
    }
}
