<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Device extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Model events Method No.2
     * using listeners and events
     */
    // protected $dispatchesEvents = [
    //     "creating" => \App\Events\DeviceCreatingEvent::class,
    //     "created" => \App\Events\DeviceCreatedEvent::class,
    // ];

    /**
     * Model events Method No.1
     * using model events by boot
     */
    // public static function boot() {
    //     parent::boot();

    //     static::creating(function ($item) {
    //         Log::info("creating event fired ". $item);
    //     });

    //     static::created(function ($item) {
    //         Log::info("Created event fired ". $item);
    //     });

    //     static::updating(function ($item) {
    //         Log::info("Updating event fired ". $item);
    //     });

    //     static::updated(function ($item) {
    //         Log::info("Updated event fired ". $item );
    //     });

    //     static::deleting(function ($item) {
    //         Log::info("Deleting event fired ". $item);
    //     });

    //     static::deleted(function ($item) {
    //         Log::info("Deleted event fired ". $item);
    //     });
    // }
}
