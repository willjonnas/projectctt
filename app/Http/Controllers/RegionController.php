<?php

namespace App\Http\Controllers;


use App\Models\Region;

use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RegionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Region::latest()->paginate(5);

        return view('region.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreRegionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $request->validate([
            'description' => 'required|unique:regions',
            'region_image' => 'required|image',
        ]);



        $file_name = time() . '.' . request()->region_image->getClientOriginalExtension();

        request()->region_image->move(public_path('img'), $file_name);

        $region = new Region;

        $region->description = $request->description;
        $region->region_image = $file_name;

        $region->save();

        return redirect()->route('region.index')->with('success', 'region Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Region $region)
    {
        return view('region.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Region $region)
    {
        return view('region.edit', compact('region'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateRegionRequest $request
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(request $request, Region $region)
    {


        $file_name = time() . '.' . request()->region_image->getClientOriginalExtension();

        request()->region_image->move(public_path('img'), $file_name);

        $region->description = $request->description;
        $region->region_image = $file_name;

        Storage::deleteDirectory('public/img/' . $region->region_image);;
        $region->save();

        return redirect()->route('region.index')->with('success', 'Region Modified Successfully.');
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('region.index')->with('success', 'Region Data Deleted Successfully');
    }


}

