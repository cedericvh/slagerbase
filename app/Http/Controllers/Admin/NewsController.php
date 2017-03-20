<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsletterRequest;
use App\Models\Newsletter;
use App\Services\MailService;

class NewsController extends Controller
{
    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        return view()->share('active', 'newsletter');
    }

    /**
     * Send emails page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.newsletter.index');
    }

    /**
     * Send all emails
     *
     * @param NewsletterRequest $request
     * @param MailService $mailer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsletterRequest $request, MailService $mailer)
    {
        $emails = Newsletter::all(['email']);
        $emailsToSend = [];

        foreach ($emails as $email) {
            $emailsToSend[] = $email->getAttribute('email');
        }

        $mailer->sendEmailWithWysiwig($request->get('body'), array_unique($emailsToSend));

        return back()
                ->with('success', 'Emails was successfully sent.');
    }
}
