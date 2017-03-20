<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Promotie;

class AmbachtController extends Controller
{
    /**
     * AmbachtController constructor.
     */
    public function __construct()
    {
        view()->share('active', 'ambacht');
        view()->share('title', 'Ambacht');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        
      $promoties = Promotie::all();
      return view('client.ambacht.index', compact('promoties'));
    }
}
