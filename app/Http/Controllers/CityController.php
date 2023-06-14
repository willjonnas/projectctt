<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Models\Region;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = City::latest()->paginate(5);

        return view('cities.index', compact('data',))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */




    public function create()
    {
        $dat = Region::All();
        return view('cities.create', ['dat' => $dat]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCityRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'region_id' => 'required',
            'description' => 'required|unique:cities',
            'cities_image' => 'required|image',
        ]);

        $file_name = time() . '.' . request()->cities_image->getClientOriginalExtension();

        request()->cities_image->move(public_path('img'), $file_name);

        $city = new City;
        $city->region_id = $request->region_id;
        $city->description = $request->description;
        $city->cities_image = $file_name;

        $city->save();

        return redirect()->route('cities.index')->with('success', 'City Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(City $city)
    {
        $dat = Region::All();
        return view('cities.edit', compact('city'),['dat' => $dat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCityRequest $request
     * @param \App\Models\City $city
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, City $city)
    {
        $city = City::find($city->id);

        $file_name = time() . '.' . request()->cities_image->getClientOriginalExtension();

        request()->cities_image->move(public_path('img'), $file_name);



        $city->description = $request->description;
        $city->cities_image = $file_name;

        $city->save();

        return redirect()->route('cities.index')->with('success', 'City Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\City $city
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City Data Deleted Successfully');

    }
}
