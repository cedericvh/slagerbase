<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsitem;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsitemsRequest;

class NewsitemsController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        return view()->share('active', 'newsitems');
    }

    /**
     * Admin's index page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */ 




  public function index()
    {
        $newsitems = Newsitem::all(['id', 'name'])->sortByDesc('id');

        return view('admin.newsitems.index', [
            'newsitems' =>  $newsitems
        ]);
    }

    /**
     * Show template.
     *
     * @param Template $template
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Newsitem $newsitem)
    {
        return view('admin.newsitems.show', [
            'newsitem'  =>  $newsitem
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newsitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TemplatesRequest $request
     * @return mixed
     */
    public function store(NewsitemsRequest $request)
    {
        Newsitem::create($request->only(['name', 'body']));

        return redirect(route('admin.newsitems.index'))
                ->with('success', 'Nieuwsbericht werd aangemaakt.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsitem $newsitem)
    {
        return view('admin.newsitems.edit', [
            'newsitem'  =>  $newsitem
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TemplatesRequest  $request
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(NewsitemsRequest $request, Newsitem $newsitem)
    {
        $newsitem->update($request->only(['name', 'body']));

        return redirect(route('admin.newsitems.index'))
                ->with('success', 'Newsitem werd aangepast.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsitem $newsitem)
    {
        $newsitem->delete();

        return redirect(route('admin.newsitems.index'))
                ->with('success', 'Nieuwsitem werd verwijderd.');
    }
  
}