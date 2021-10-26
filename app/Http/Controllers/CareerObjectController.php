<?php

namespace App\Http\Controllers;

use App\Models\Career_object;
use Illuminate\Http\Request;

class CareerObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career_object  $career_object
     * @return \Illuminate\Http\Response
     */
    public function show(Career_object $career_object)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career_object  $career_object
     * @return \Illuminate\Http\Response
     */
    public function edit(Career_object $career_object)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career_object  $career_object
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career_object $career_object)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career_object  $career_object
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career_object $career_object)
    {
        //
    }
}
