<?php

namespace App\Listeners;

use App\Events\GymAdded;
use App\Gym;
use App\House;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceGym
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
     * @param  GymAdded  $event
     * @return void
     */
    public function handle(GymAdded $event)
    {
        $houses = House::All();
        $gyms = Gym::All();

        foreach ($houses as $house) {

            $e = $house->closest($gyms);

            if ($e['dist']<=500)
            {
                $house->gymD1 = true;
            }
            elseif ($e['dist']<=1000)
            {
                $house->gymD2 = true;
            }
            elseif ($e['dist']<=3000)
            {
                $house->gymD3 = true;
            }
            else
            {

            }
            $house->save();
        }
    }
}
