<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DepartementDataTable;
use App\Http\Controllers\Controller;
use App\Models\Arrondissement;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Poubelle;
use App\Models\Quartier;
use App\Models\Zone;

class AdminController extends Controller
{
    public function index(DepartementDataTable $dataTable)
    {
        $departements = Departement::orderBy('title', 'desc')->get();
        return view('home', compact('departements'));
    }

    public function indexDepartement()
    {
        return view('departement');
    }

    public function poubelleDepartement($id)
    {
        $poubelles = Poubelle::where('departement_id', $id)->get();
        $departements = Departement::get();
        $communes = Commune::get()->take('30');
        $arrondissements = Arrondissement::get()->take('30');
        $quartiers = Quartier::get()->take('60');
        return view('poubelle.index', compact('poubelles', 'departements', 'communes', 'arrondissements', 'quartiers'));
    }

    public function indexQuartier($id)
    {
        $arrondissement = Arrondissement::findOrFail($id);
        $quartiers = Quartier::where('arrondissement_id', $arrondissement->id)->with('arrondissement')->get();
        return view('table.quartier', compact('quartiers'));
    }

    public function indexZone($id)
    {
        $quartier = Quartier::findOrFail($id);
        $zones = Zone::where('quartier_id', $quartier->id)->with('quartier')->get();
        return view('table.zone', compact('zones'));
    }

    public function indexPoubelle($id)
    {
        $zone = Zone::findOrFail($id);
        $poubelles = Poubelle::where('zone_id', $zone->id)->with('history')->get();
        return view('poubelle.index', compact( 'poubelles', 'zone'));
    }
}
