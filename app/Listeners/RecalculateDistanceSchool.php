<?php

namespace App\Listeners;

use App\Events\SchoolAdded;
use App\House;
use App\School;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceSchool
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
     * @param  SchoolAdded  $event
     * @return void
     */
    public function handle(SchoolAdded $event)
    {
        $houses=House::All();
        $schools=School::All();

        foreach ($houses as $house)
        {
            $d = $house->closest($schools);

            if ($d['dist']<=500)
            {
                $house->schoolD1 = true;
            }
            elseif ($d['dist']<=1000)
            {
                $house->schoolD2 = true;
            }
            elseif ($d['dist']<=3000)
            {
                $house->schoolD3 = true;
            }
            else
            {

            }
            $house->save();
        }
    }
}
