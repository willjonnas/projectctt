<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\City;
use App\Models\Desk;
use App\Http\Requests\UpdateDeskRequest;
use App\Models\Level;
use App\Models\Sector;
use App\Models\Subsector;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $datatable = Desk::latest()->paginate(5);

        return view('desk.index', compact('datatable'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $datatablebuilding = Building::All();
        $datatablelevel = Level::All();
        $datatablesector = Sector::All();
        $datatablesubsector = Subsector::All();
        return view('desk.create', [
            'datatablebuilding' => $datatablebuilding,
            'datatablelevel' => $datatablelevel,
            'datatablesector' => $datatablesector,
            'datatablesubsector' => $datatablesubsector,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreDeskRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'subsector_id' => 'required',
            'description' => 'required|unique:desks',
            'desk_image' => 'required|image',
            'sector_id' => 'required',
            'level_id' => 'required',
            'building_id' =>'required',
        ]);

        $file_name = time() . '.' . request()->desk_image->getClientOriginalExtension();

        request()->desk_image->move(public_path('img'), $file_name);

        $desk = new Desk;
        $desk->building_id = $request->building_id;
        $desk->level_id = $request->level_id;
        $desk->sector_id = $request->sector_id;
        $desk->subsector_id = $request->subsector_id;
        $desk->description = $request->description;
        $desk->desk_image = $file_name;

        $desk->save();

        return redirect()->route('desk.index')->with('success', 'Desk Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Desk $desk
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Desk $desk)
    {
        return view('desk.show', compact('desk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Desk $desk
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Desk $desk)
    {
        $datatablebuilding = Building::All();
        $datatablelevel = Level::All();
        $datatablesector = Sector::All();
        $datatablesubsector = Subsector::All();
        return view('desk.edit', compact('desk'), [
            'datatablebuilding' => $datatablebuilding,
            'datatablelevel' => $datatablelevel,
            'datatablesector' => $datatablesector,
            'datatablesubsector' => $datatablesubsector,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDeskRequest $request
     * @param \App\Models\Desk $desk
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Desk $desk)
    {

        $desk = Desk::find($desk->id);
        $file_name = time() . '.' . request()->desk_image->getClientOriginalExtension();

        request()->desk_image->move(public_path('img'), $file_name);



        $desk->description = $request->description;
        $desk->desk_image = $file_name;

        $desk->save();

        return redirect()->route('desk.index')->with('success', 'Desk Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Desk $desk
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
        return redirect()->route('desk.index')->with('success', 'Desk Data Deleted Successfully');
    }
}
