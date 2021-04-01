<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\Agence;
use App\Models\Zone;
use MercurySeries\Flashy\Flashy;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agences = Agence::get();
        return view('backend.entreprises.index', compact('agences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = zone::all();
        return view('backend.entreprises.form', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntrepriseRequest $request)
    {
        Agence::create($request->all());
        Flashy::success(config('messages.entreprisecreated'));
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        $zones = Zone::all();
        return view('backend.entreprises.form', compact('agence', 'zones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, Agence $agence)
    {
        $agence->update($request->all());
        Flashy::success(config('messages.entrepriseupdated'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        $agence->delete();

        return redirect(route('agences.index'));
    }

    public function alert(Agence $agence)
    {
        return view('backend.entreprises.destroy', ['agence' => $agence]);
    }
}
