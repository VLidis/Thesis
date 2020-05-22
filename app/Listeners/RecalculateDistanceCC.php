<?php

namespace App\Listeners;

use App\CityCenter;
use App\Events\CityCenterAdded;
use App\House;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceCC
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
     * @param  CityCenterAdded  $event
     * @return void
     */
    public function handle(CityCenterAdded $event)
    {
        $houses = House::All();
        $cityCenters = CityCenter::All();

        foreach ($houses as $house) {
            $g = $house->closest($cityCenters);

            if ($g['dist'] <= 500) {
                $house->cityCenterD1 = true;
            } elseif ($g['dist'] <= 1000) {
                $house->cityCenterD2 = true;
            } elseif ($g['dist'] <= 3000) {
                $house->cityCenterD3 = true;
            } else {

            }
            $house->save();
        }
    }
}
