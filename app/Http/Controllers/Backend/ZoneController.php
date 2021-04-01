<?php

namespace App\Http\Controllers\backend;

use App\DataTables\ZoneDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ZoneRequest;
use App\Models\Quartier;
use App\Models\Zone;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::get();
        return view('backend.zones.index', compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quartiers = Quartier::all();
        return view('backend.zones.form', compact('quartiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoneRequest $request)
    {
        Zone::create($request->all());

        return back()->with('alert', config('messages.zonecreated'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        $quartiers = Quartier::all();
        return view('backend.zones.form', ['zone' => $zone, 'quartiers'=>$quartiers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(ZoneRequest $request, Zone $zone)
    {
        $zone->update($request->all());

        return back()->with('alert', config('messages.zoneupdated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        $zone->agences()->detach();
        $zone->delete();

        return redirect(route('zones.index'));
    }

    public function alert(Zone $zone)
    {
        return view('backend.zones.destroy', ['zone' => $zone]);
    }
}
