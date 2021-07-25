<?php

namespace App\Listeners;

use App\Events\ProgressWorkOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProgressWorkOrderListener
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
     * @param  ProgressWorkOrderEvent  $event
     * @return void
     */
    public function handle(ProgressWorkOrderEvent $event)
    {
        //
    }
}
