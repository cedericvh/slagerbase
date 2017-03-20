<?php

namespace App\Events\Client;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OrderProcessed implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var Order
     */
    public $order;

    /**
     * OrderProcessed constructor.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('orders');
    }

    /**
     * Broadcast data.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'order' =>  $this->order
        ];
    }
}
