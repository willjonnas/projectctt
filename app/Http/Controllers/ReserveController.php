<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\City;
use App\Models\Client;
use App\Models\Desk;
use App\Models\Level;
use App\Models\Region;
use App\Models\Reservation;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {


    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $reservation = new Reservation;
        $reservation-> desks_id = $request->desks_id;
        $reservation-> users_id = $request->users_id;
        $reservation-> reservations_id = $request->reservations_id;
        $reservation->reservation_date = Carbon::createFromFormat('Y-m-d', $request->input('reservation_date'));




        $reservation->save();

        return redirect()->route('profile.index')->with('success', 'rersevation Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
