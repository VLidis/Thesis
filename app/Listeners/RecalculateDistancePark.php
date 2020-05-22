<?php

namespace App\Listeners;

use App\Events\ParkAdded;
use App\House;
use App\Park;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistancePark
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
     * @param  ParkAdded  $event
     * @return void
     */
    public function handle(ParkAdded $event)
    {
        $houses = House::All();
        $parks= Park::All();

        foreach ($houses as $house)
        {
            $f = $house->closest($parks);

            if ($f['dist']<=500)
            {
                $house->parkD1 = true;
            }
            elseif ($f['dist']<=1000)
            {
                $house->parkD2 = true;
            }
            elseif ($f['dist']<=3000)
            {
                $house->parkD3 = true;
            }
            else
            {

            }
            $house->save();
        }

    }
}
