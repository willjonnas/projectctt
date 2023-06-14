<?php

namespace App\Http\Controllers;

use App\Models\Subsector;
use App\Http\Requests\StoreSubsectorRequest;
use App\Http\Requests\UpdateSubsectorRequest;

class SubsectorController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubsectorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubsectorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subsector  $subsector
     * @return \Illuminate\Http\Response
     */
    public function show(Subsector $subsector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subsector  $subsector
     * @return \Illuminate\Http\Response
     */
    public function edit(Subsector $subsector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubsectorRequest  $request
     * @param  \App\Models\Subsector  $subsector
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubsectorRequest $request, Subsector $subsector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subsector  $subsector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subsector $subsector)
    {
        //
    }
}
