<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Promotie;

class FoldersController extends Controller
{
    /**
     * FoldersController constructor.
     */
    public function __construct()
    {
        view()->share('active', 'folders');
        view()->share('title', 'Folders');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $promoties = Promotie::all();   
      return view('client.folders.index', compact('promoties'));
    }
}
