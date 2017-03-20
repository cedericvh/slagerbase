<?php

namespace App\Services;

use Illuminate\Contracts\Mail\MailQueue;

class MailService
{
    /**
     * @var MailQueue
     */
    protected $mailer;

    /**
     * MailService constructor.
     * @param MailQueue $mailer
     */
    public function __construct(MailQueue $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param $templateData
     * @param array $emails
     */
    public function sendEmailWithWysiwig($templateData, array $emails = [])
    {
        foreach ($emails as $email) {
            $this->mailer->queue('emails.orders', ['data' => $templateData], function ($e) use ($email) {
                $e->to($email);
            });
        }
    }
}
