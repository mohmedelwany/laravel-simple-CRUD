<?php

namespace App\Observers;

use App\Models\Device;
use Illuminate\Support\Facades\Log;

class DeviceObserver
{
    /**
     * Method no.3
     * using observer
     */
    public function creating(Device $device){
        Log::info("Creating Observer method is firing ". $device);
    }
    /**
     * Handle the Device "created" event.
     *
     * @param  \App\Models\Device  $device
     * @return void
     */
    public function created(Device $device)
    {
        Log::info("created Observer method is firing ". $device);
    }

    /**
     * Handle the Device "updated" event.
     *
     * @param  \App\Models\Device  $device
     * @return void
     */
    public function updated(Device $device)
    {
        //
    }

    /**
     * Handle the Device "deleted" event.
     *
     * @param  \App\Models\Device  $device
     * @return void
     */
    public function deleted(Device $device)
    {
        Log::info("deleted Observer method is firing ". $device);
    }

    /**
     * Handle the Device "restored" event.
     *
     * @param  \App\Models\Device  $device
     * @return void
     */
    public function restored(Device $device)
    {
        //
    }

    /**
     * Handle the Device "force deleted" event.
     *
     * @param  \App\Models\Device  $device
     * @return void
     */
    public function forceDeleted(Device $device)
    {
        //
    }
}
