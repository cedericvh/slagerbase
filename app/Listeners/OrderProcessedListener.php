<?php

namespace App\Listeners;

use App\Events\Client\OrderProcessed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderProcessedListener
{
    /**
     * Handle the event.
     *
     * @param  OrderProcessed  $event
     * @return void
     */
    public function handle(OrderProcessed $event)
    {
        //
    }
}
