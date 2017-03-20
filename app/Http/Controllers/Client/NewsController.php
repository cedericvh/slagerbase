<?php

namespace App\Http\Controllers\Client;

use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\NewsletterRequest;

class NewsController extends Controller
{
    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        view()->share('title', 'Nieuwsbrief');
    }

    /**
     * Client's subscribe to newsletter page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('client.newsletter.index');
    }

    /**
     * Client's success page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function success()
    {
        if (! session('success')) {

            return redirect(route('client.newsletter.index'));
        }

        return view('client.newsletter.success');
    }

    /**
     * Subscribe to newsletter
     *
     * @param NewsletterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsletterRequest $request)
    {
        Newsletter::create($request->only(['name', 'email']));

        return redirect(route('client.newsletter.success'))
                ->with('success', true);
    }
}
