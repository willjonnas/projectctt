<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\City;
use App\Models\Clients_desks;
use App\Http\Requests\StoreClients_desksRequest;
use App\Http\Requests\UpdateClients_desksRequest;
use App\Models\Desk;
use App\Models\Level;
use App\Models\Region;
use App\Models\Reservation;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ClientsDesksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $datauser = User:: ALL();
        $datareservations = Reservation:: ALL();
        $datalevel = Level::All();
        $datasector = Sector::All();
        $datasubsector = Subsector::All();
        $datadesk = Desk::All();
        $data = Region::All();
        $datacity = City::All();
        $databuilding = Building::All();

        return view('reserve.index',
            ['data' => $data,
                'datacity' => $datacity,
                'databuilding' => $databuilding,
                'datadesk' => $datadesk,
                'datalevel' => $datalevel,
                'datasector' => $datasector,
                'datasubsector' => $datasubsector,
                'datauser' => $datauser,
                'datareservations' => $datareservations,]);

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
     * @param \App\Http\Requests\StoreClients_desksRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

       /** $request->validate([
            'desks_id' => 'required',
            'reservations_id' => 'required',
            'users_id' => 'required',
            'reservation_date' => [
                'required',
                Rule::unique('Clients_desks', 'reservation_date')
                    ->where('desks_id', $request->desks_id)
                    ->where(function ($query) use ($request) {
                        $query->where('id', '<>', $request->id);
                    })
            ],
        ]);*/

        $request->validate([
            'reservations_id' => 'required',
        ]);
        $reservation = new Clients_desks;

        $reservation->users_id = $request->users_id;
        $reservation->desks_id = $request->desks_id;
        $reservation->reservations_id = $request->reservations_id;
        $reservation->reservation_date = Carbon::createFromFormat('Y-m-d', $request->input('reservation_date'));

//dd($request);
        $reservation->save();


        return redirect()->route('profile.index')->with('success', 'Rersevation Added Successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Clients_desks $clients_desks
     * @return \Illuminate\Http\Response
     */
    public function show(Clients_desks $clients_desks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Clients_desks $clients_desks
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients_desks $clients_desks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateClients_desksRequest $request
     * @param \App\Models\Clients_desks $clients_desks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClients_desksRequest $request, Clients_desks $clients_desks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Clients_desks $clients_desks
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id)
    {

        $reservation = Clients_desks::find($id);
        $reservation->delete();

        if (Auth::user()->role === 'admin') {
            return redirect()->route('reservations.index')->with('success', 'Reservation data deleted successfully.');
        } else {
            return redirect()->route('profile.index')->with('success', 'Reservation data deleted successfully.');
        }



    }



}
