<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PoubelleRequest;
use App\Models\History;
use App\Models\Poubelle;
use App\Models\Zone;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class PoubelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poubelles = Poubelle::with('zone')->get();
        return view('backend.poubelles.index', compact('poubelles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = zone::all();
        return view('backend.poubelles.form', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoubelleRequest $request)
    {
        $exit = Poubelle::where('numero', $request->numero)->where('zone_id', $request->zone_id)->first();
        if(!is_null($exit   ))
        {
            Flashy::error("Poubelle N°: ". $request->numero ." déjà assignée");
        }
        $request->merge(['public' => $request->has('public') ? true : false]);
        $zone = Zone::find($request->zone_id);
        $quartier = $zone->quartier_id;
        $arrondissement = $zone->quartier->arrondissement_id;
        $commune = $zone->quartier->arrondissement->commune_id;
        $departement = $zone->quartier->arrondissement->commune->departement_id;

        $poubelle = Poubelle::create([
            'numero' => $request->numero,
            'latitude' =>  $request->latitude,
            'longitude' => $request->longitude,
            'public' => $request->public,
            'departement_id' => $departement,
            'commune_id' => $commune,
            'arrondissement_id' => $arrondissement,
            'quartier_id' => $quartier,
            'zone_id' => $zone->id
        ]);

        History::create([
           'etat' => 'vide',
           'poubelle_id' => $poubelle->id,
           'zone_id' => $zone->id
        ]);

        Flashy::success(config('messages.poubellecreated'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poubelle = Poubelle::findOrFail($id);
        return view('poubelle.show', compact('poubelle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poubelle  $poubelle
     * @return \Illuminate\Http\Response
     */
    public function edit(Poubelle $poubelle)
    {
        $zones = Zone::all();
        return view('backend.poubelles.form', ['poubelle' => $poubelle, 'zones'=>$zones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poubelle  $poubelle
     * @return \Illuminate\Http\Response
     */
    public function update(PoubelleRequest $request, Poubelle $poubelle)
    {
        $request->merge(['public' => $request->has('public') ? true : false]);
        $is_different = false;
        if($request->zone_id != $poubelle->zone_id)
        {
            $is_different = true;
            $zone = Zone::find($request->zone_id);
            $quartier = $zone->quartier_id;
            $arrondissement = $zone->quartier->arrondissement_id;
            $commune = $zone->quartier->arrondissement->commune_id;
            $departement = $zone->quartier->arrondissement->commune->departement_id;
        }

        $poubelle->update([
            'numero' => $request->numero,
            'latitude' =>  $request->latitude,
            'longitude' => $request->longitude,
            'public' => $request->public,
            'departement_id' => ($is_different) ? $departement : $poubelle->departement_id,
            'commune_id' => ($is_different) ? $commune : $poubelle->commune_id,
            'arrondissement_id' => ($is_different) ? $arrondissement : $poubelle->arrondissement_id,
            'quartier_id' => ($is_different) ? $quartier : $poubelle->quartier_id,
            'zone_id' => ($is_different) ? $zone->id : $poubelle->zone_id
        ]);

        Flashy::success(config('messages.poubelleupdated'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poubelle  $poubelle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poubelle $poubelle)
    {
        $poubelle->delete();

        return redirect(route('poubelles.index'));
    }

    public function alert(Poubelle $poubelle)
    {
        return view('backend.poubelles.destroy', ['poubelle' => $poubelle]);
    }
}
