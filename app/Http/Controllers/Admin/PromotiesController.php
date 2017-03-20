<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PromotiesRequest;
use App\Models\Wysiwig;
use App\Models\Promotie;

class PromotiesController extends Controller
{
    /**
     * PromotiesController constructor.
     */
    public function __construct()
    {
        return view()->share('active', 'promoties');
    }

    /**
     * Admin's romoties page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $promoties = Promotie::all();

        return view('admin.promoties.index', compact('promoties'));
    }

    /**
     * Update body
     *
     * @param PromotiesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PromotiesRequest $request){
      
      
      
    }  
  
  
  
    public function update($id, PromotiesRequest $request)
    {
      
     
//       Wysiwig::bySlug('promoties')->first()
//                 ->update([
//                     'body'  =>  $request->get('body')
//                 ]);
      
      $promotie = Promotie::findOrFail($id);
      
      $promotie->update(['titel'  =>  $request->get('titel')]);
      $promotie->update(['body'  =>  $request->get('body')]);

        return redirect()
                ->back();
    }
}
