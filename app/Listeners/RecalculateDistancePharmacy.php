<?php

namespace App\Listeners;

use App\Events\PharmacyAdded;
use App\House;
use App\Pharmacy;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistancePharmacy
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
     * @param  PharmacyAdded  $event
     * @return void
     */
    public function handle(PharmacyAdded $event)
    {
        $houses=House::All();
        $pharmacies=Pharmacy::All();

        foreach ($houses as $house )
        {
            $a = $house->closest($pharmacies);

            if ($a['dist']<=500)
            {
                $house->pharmacyD1 = true;
            }
            elseif ($a['dist']<=1000)
            {
                $house->pharmacyD2 = true;
            }
            elseif ($a['dist']<=3000)
            {
                $house->pharmacyD3 = true;
            }
            else
            {

            }
            $house->save();

        }
    }
}
