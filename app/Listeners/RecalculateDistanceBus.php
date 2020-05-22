<?php

namespace App\Listeners;

use App\Bus;
use App\Events\BusAdded;
use App\House;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceBus
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
     * @param  BusAdded  $event
     * @return void
     */
    public function handle(BusAdded $event)
    {
        $houses=House::All();
        $buses=Bus::All();

        foreach ($houses as $house) {

            $h = $house->closest($buses);

            $house->busD = $h['dist'];

            $house->save();
        }

    }
}
