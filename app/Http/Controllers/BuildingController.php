<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Http\Requests\StoreBuildingRequest;
use Illuminate\Http\Request;
use App\Models\City;


class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $databuilding = Building::latest()->paginate(5);

        return view('buildings.index', compact('databuilding'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $databuildingcity = City::All();
        return view('buildings.create', ['databuildingcity' => $databuildingcity]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBuildingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $request->validate([
            'cities_id' => 'required',
            'description' => 'required|unique:buildings',
            'buildings_image' => 'required|image',
        ]);
        $file_name = time() . '.' . request()->buildings_image->getClientOriginalExtension();

        request()->buildings_image->move(public_path('img'), $file_name);

        $building = new Building;
        $building->cities_id = $request->cities_id;
        $building->description = $request->description;
        $building->buildings_image = $file_name;

        $building->save();

        return redirect()->route('buildings.index')->with('success', 'Building Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Building $building
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Building $building)
    {
        return view('buildings.show', compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Building $building
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Building $building)
    {
        $databuildingcity = City::All();
        return view('buildings.edit', compact('building'), ['databuildingcity' => $databuildingcity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBuildingRequest $request
     * @param \App\Models\Building $building
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Building $building)
    {
        $building = Building::find($building->id);

        $file_name = time() . '.' . request()->buildings_image->getClientOriginalExtension();

        request()->buildings_image->move(public_path('img'), $file_name);


        $building->description = $request->description;
        $building->buildings_image = $file_name;

        $building->save();

        return redirect()->route('buildings.index')->with('success', 'Building Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Building $building
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Building $building)
    {
        $building->delete();
        return redirect()->route('buildings.index')->with('success', 'Building Data deleted successfully');
    }
}
