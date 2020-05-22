<?php

namespace App\Listeners;

use App\Events\SupermarketAdded;
use App\House;
use App\Supermarket;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistanceSuper
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
     * @param  SupermarketAdded  $event
     * @return void
     */
    public function handle(SupermarketAdded $event)
    {
        $houses=House::All();
        $supermarkets=Supermarket::All();

        foreach ($houses as $house)
        {
            $c = $house->closest($supermarkets);

            if ($c['dist']<=500)
            {
                $house->supermarketD1 = true;
            }
            elseif ($c['dist']<=1000)
            {
                $house->supermarketD2 = true;
            }
            elseif ($c['dist']<=3000)
            {
                $house->supermarketD3 = true;
            }
            else
            {

            }
            $house->save();

        }

    }
}
