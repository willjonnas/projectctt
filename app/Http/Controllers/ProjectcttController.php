<?php

namespace App\Http\Controllers;

use App\Models\Projectctt;
use App\Http\Requests\StoreProjectcttRequest;
use App\Http\Requests\UpdateProjectcttRequest;
use App\Models\Region;

class ProjectcttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('projectoctt.index');

    }
    public function adminHome()
    {
        return view('home');
    }
    public function userHome(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('projectoctt.index');
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
     * @param  \App\Http\Requests\StoreProjectcttRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectcttRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projectctt  $projectctt
     * @return \Illuminate\Http\Response
     */
    public function show(Projectctt $projectctt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projectctt  $projectctt
     * @return \Illuminate\Http\Response
     */
    public function edit(Projectctt $projectctt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectcttRequest  $request
     * @param  \App\Models\Projectctt  $projectctt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectcttRequest $request, Projectctt $projectctt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projectctt  $projectctt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projectctt $projectctt)
    {
        //
    }
}
