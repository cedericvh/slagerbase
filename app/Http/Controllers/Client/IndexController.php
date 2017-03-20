<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Promotie;
use App\Models\Newsitem;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        return view()->share('active', 'index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        
      $promoties = Promotie::all();
      $newsitems = Newsitem::all(['id', 'name', 'body'])->sortByDesc('id');
      
      
      return view('client.index.index', compact('promoties','newsitems'));
    }
  
  
  
  
}
