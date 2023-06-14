<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataclient = Client::latest()->paginate(5);

        return view('clients.index', compact('dataclient'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $dataclient = Client::All();
        return view('clients.create', ['dataclient' => $dataclient]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $file_name = time() . '.' . request()->client_image->getClientOriginalExtension();

        request()->client_image->move(public_path('img'), $file_name);

        $client = new Client;
        $client->client_id = $request->client_id;
        $client->description = $request->description;
        $client->client_image = $file_name;

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Client $client)
    {
        $dataclient = Client::All();
        return view('clients.edit', compact('client'), ['dataclient' => $dataclient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Client $client)
    {
        $client = Client::find($client->id);

        $file_name = time() . '.' . request()->client_image->getClientOriginalExtension();

        request()->client_image->move(public_path('img'), $file_name);


        $client->description = $request->description;
        $client->client_image = $file_name;

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client Data Deleted Successfully');
    }
}
