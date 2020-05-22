<?php

namespace App\Listeners;

use App\Events\HouseAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RecalculateDistance
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
     * @param  HouseAdded  $event
     * @return void
     */
    public function handle(HouseAdded $event)
    {
        //
    }
}
