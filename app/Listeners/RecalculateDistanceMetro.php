<?php

namespace App\Listeners;

use App\Events\MetroAdded;
use App\House;
use App\Metro;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceMetro
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
     * @param  MetroAdded  $event
     * @return void
     */
    public function handle(MetroAdded $event)
    {
        $houses = House::All();
        $metros = Metro::All();

        foreach ($houses as $house)
        {

            $b = $house->closest($metros);

            if ($b['dist']<=500)
            {
                $house->metroD1 = true;
            }
            elseif ($b['dist']<=1000)
            {
                $house->metroD2 = true;
            }
            elseif ($b['dist']<=3000)
            {
                $house->metroD3 = true;
            }
            else
            {

            }
            $house->save();
        }
    }
}
