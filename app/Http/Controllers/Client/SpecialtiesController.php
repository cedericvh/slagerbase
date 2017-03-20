<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Promotie;


class SpecialtiesController extends Controller
{
    /**
     * SpecialtiesController constructor.
     */
    public function __construct()
    {
        view()->share('active', 'specialties');
        view()->share('title', 'Specialiteiten');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $promoties = Promotie::all();  
      return view('client.specialties.index', compact('promoties'));
    }
}
