<?php

namespace App\Http\Controllers\Client;

use App\Events\Client\OrderCreated;
use App\Models\Order;
use App\Models\Promotie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\OrderRequest;
use Carbon\Carbon;


class OrdersController extends Controller
{
    /**
     * OrdersController constructor.
     */
    public function __construct()
    {
        view()->share('title', 'Bestel On-line');
    }

    /**
     * Client's orders page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $promoties = Promotie::all();   
      return view('client.orders.index', compact('promoties'));
    }

    /**
     * Client-order's success page
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function success()
    {
        
      if (! session('success')) {

          $promoties = Promotie::all();   
          return redirect(route('client.orders.index', compact('promoties')));
        }
        $promoties = Promotie::all();
        return view('client.orders.success', compact('promoties'));
    }

    /**
     * Submit the order
     *
     * @param OrderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderRequest $request)
    {
        $orderData = $request->only([
            'name',
            'number',
            'email',
            'phone_number',
            'dategetorder'
        ]);

        $orderData['bestelling'] = nl2br($request->get('bestelling'));      
        $orderData['date'] = Carbon::now('Europe/Brussels');
        //dd($orderData);
        //$orderData['date'] = Carbon::parse($request->get('date'));

        $order = Order::create($orderData);

        event(new OrderCreated($order));

        return redirect(route('client.orders.success'))
                ->with('success', true);
    }
}
