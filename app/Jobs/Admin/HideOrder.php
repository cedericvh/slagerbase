<?php

namespace App\Jobs\Admin;

use App\Events\Client\OrderProcessed;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HideOrder implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Order
     */
    protected $order;


    /**
     * ProcessOrder constructor.
     * @param Order $order
     * @param Template $template
     */
    public function __construct(Order $order)
    {
        $this->order = $order;

    }

    /**
     * Execute the job.
     *
     * @param Mailer $mailer
     * @return void
     */
    public function handle()
    {
        try {
            if ($this->order->hide <> true){
            $this->order->update([
                'hide'  =>  true
            ]);
            } else {
            $this->order->update([
                'hide'  =>  null
            ]);              
            }
        } catch (\Exception $e) {
            $this->order->update([
                'hide'  =>  null
            ]);

            logger($e->getMessage());
        }

        event(new OrderProcessed($this->order));
    }
}
