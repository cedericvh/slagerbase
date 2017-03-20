<?php

namespace App\Listeners;

use App\Events\Client\OrderCreated;
use App\Models\Order;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreatedListener implements ShouldQueue
{
    /**
     * @var Mailer
     */
    protected $mailer;

    /**
     * OrderCreatedListener constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $this->sendEmail($event->order);
    }

    /**
     * Send email to submitter
     *
     * @param Order $order
     */
    protected function sendEmail(Order $order)
    {
        $this->mailer->send('emails.order-submitted', ['order' => $order], function ($mail) use ($order) {
            $mail->to($order->getAttribute('email'));
            $mail->subject('Bedankt voor uw bestelling bij Slagerij De Smedt');
        });
      
      
        $this->mailer->send('emails.order-submitted', ['order' => $order], function ($mail) use ($order) {
            $mail->to('info@slagerijdesmedt.be');
            $mail->replyTo($order->getAttribute('email'),$order->getAttribute('name'));
            $mail->subject('Bestelling via website '.$order->getAttribute('name'));
            
        });
      
    }
}
