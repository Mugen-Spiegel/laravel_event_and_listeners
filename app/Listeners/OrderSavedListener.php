<?php

namespace App\Listeners;

use App\Events\OrderSaved;
use App\Variant;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderSavedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(OrderSaved $event)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderSaved  $event
     * @return void
     */
    public function handle(OrderSaved $event)
    {
        $variant = Variant::find(1);
        $variant->quantity_stock -= $event->order->quantity;
        $variant->save();
    }
}
