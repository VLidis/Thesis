<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\HouseAdded'=> [
            'App\Listeners\RecalculateDistance',
        ],
        'App\Events\BusAdded'=> [
            'App\Listeners\RecalculateDistanceBus',
        ],
        'App\Events\CityCenterAdded'=> [
            'App\Listeners\RecalculateDistanceCC',
        ],
        'App\Events\GymAdded'=> [
            'App\Listeners\RecalculateDistanceGym',
        ],
        'App\Events\MetroAdded'=> [
            'App\Listeners\RecalculateDistanceMetro',
        ],
        'App\Events\ParkAdded'=> [
            'App\Listeners\RecalculateDistancePark',
        ],
        'App\Events\PharmacyAdded'=> [
            'App\Listeners\RecalculateDistancePharmacy',
        ],
        'App\Events\SchoolAdded'=> [
            'App\Listeners\RecalculateDistanceSchool',
        ],
        'App\Events\SupermarketAdded'=> [
            'App\Listeners\RecalculateDistanceSuper',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
