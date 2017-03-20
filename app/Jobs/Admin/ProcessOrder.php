<?php

namespace App\Jobs\Admin;

use App\Events\Client\OrderProcessed;
use App\Models\Order;
use App\Models\Template;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessOrder implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var string|int
     */
    protected $template;

    /**
     * ProcessOrder constructor.
     * @param Order $order
     * @param Template $template
     */
    public function __construct(Order $order, Template $template)
    {
        $this->order = $order;
        $this->template = $template;
    }

    /**
     * Execute the job.
     *
     * @param Mailer $mailer
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        try {
            $mailer->send('emails.orders', ['data' => $this->template->getAttribute('body')], function ($mail) {
                $mail->to($this->order->getAttribute('email'));
                $mail->subject('Bedankt voor uw bestelling bij Slagerij De Smedt');
            });

            $this->order->update([
                'rejected'  =>  true
            ]);
        } catch (\Exception $e) {
            $this->order->update([
                'rejected'  =>  false
            ]);

            logger($e->getMessage());
        }

        event(new OrderProcessed($this->order));
    }
}
