<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service_cat;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Service_cat::get();
        return view('admin.categories.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service_cat::create($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service_cat  $service_cat
     * @return \Illuminate\Http\Response
     */
    public function show($service_cat)
    {
     
        $cat = Service_cat::where('id', $service_cat)->get()->first();
        return view('admin.categories.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service_cat  $service_cat
     * @return \Illuminate\Http\Response
     */
    public function edit($service_cat)
    {
        $cat = Service_cat::where('id', $service_cat)->get()->first();
        return view('admin.categories.form', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service_cat  $service_cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_cat)
    {
        $cat = Service_cat::where('id', $service_cat)->get()->first();
        $cat->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service_cat  $service_cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_cat)
    {
        $cat = Service_cat::where('id', $service_cat)->get()->first();
        $cat->delete();
        return redirect()->route('categories.index');
    }
}
