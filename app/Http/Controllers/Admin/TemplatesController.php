<?php

namespace App\Http\Controllers\Admin;

use App\Models\Template;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TemplatesRequest;

class TemplatesController extends Controller
{
    /**
     * TemplatesController constructor.
     */
    public function __construct()
    {
        view()->share('active' , 'templates');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::all(['id', 'name']);

        return view('admin.templates.index', [
            'templates' =>  $templates
        ]);
    }

    /**
     * Show template.
     *
     * @param Template $template
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Template $template)
    {
        return view('admin.templates.show', [
            'template'  =>  $template
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TemplatesRequest $request
     * @return mixed
     */
    public function store(TemplatesRequest $request)
    {
        Template::create($request->only(['name', 'body']));

        return redirect(route('admin.templates.index'))
                ->with('success', 'Template was successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        return view('admin.templates.edit', [
            'template'  =>  $template
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TemplatesRequest  $request
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(TemplatesRequest $request, Template $template)
    {
        $template->update($request->only(['name', 'body']));

        return redirect(route('admin.templates.index'))
                ->with('success', 'Template was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $template->delete();

        return redirect(route('admin.templates.index'))
                ->with('success', 'Admin was successfully removed.');
    }
}
