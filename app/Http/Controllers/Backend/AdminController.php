<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Arrondissement;
use App\Models\History;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Poubelle;
use App\Models\Quartier;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
//        $totalPoub = Poubelle::count();
//        $totalPleinne = History::where('etat', 'like' ,'pleinne')->get()->last();
//        $totalPasPleinne = History::where('etat', 'pas pleinne')->last()->count();
//        $totalVide = History::where('etat', 'vide')->last()->count();
        return view('home');
    }

    public function indexDepartement($etat)
    {
        session(['type' => $etat]);
        return view('departement');
    }

    public function poubelleDepartement($id)
    {
        $departSelect = $id;
        $departements = Departement::get();
        $poubelles = Poubelle::where('departement_id', $id)->paginate(15);
        $communes = Commune::where('departement_id', $id)->get();
        return view('poubelle.index', compact('poubelles', 'departements', 'departSelect', 'communes'));
    }

    public function filtrePoubelle(Request $request)
    {
        $departements = Departement::get();
        $departSelect = $request->departement;
        $communes = Commune::where('departement_id', $request->departement)->get();
        if(!empty($request->commune))
        {
            $arrondissements = Arrondissement::where('commune_id', $request->commune)->get();
        }else{
            $arrondissements=null;
        }
        if(!empty($request->arrondissement))
        {
            $quartiers = Quartier::where('arrondissement_id', $request->arrondissement)->get();
        }else{
            $quartiers=null;
        }

        $communeSelect = $request->commune ?? '';
        $arrondissementSelect = $request->arrondissement ?? '';
        $quartierSelect = $request->quartier ?? '';

        $filters = [
            'quartier' => $request->quartier ?? null,
            'departement' => $request->departement ?? null,
            'commune' => $request->commune ?? null,
            'arrondissement' => $request->arrondissement ?? null,
        ];

        $poubelles = Poubelle::where(function ($query) use ($filters) {
            if ($filters['quartier'] !== null) {
                $query->where('quartier_id', '=', $filters['quartier']);
            }
            if ($filters['departement'] !== null) {
                $query->where('departement_id', '=', $filters['departement']);
            }
            if ($filters['commune'] !== null) {
                $query->where('commune_id', '=', $filters['commune']);
            }
            if ($filters['arrondissement'] !== null) {
                $query->where('arrondissement_id', '=', $filters['arrondissement']);
            }
        })->paginate(15);

        return view('poubelle.index', compact('poubelles', 'departements', 'departSelect',
            'communes', 'communeSelect', 'arrondissements', 'arrondissementSelect', 'quartiers', 'quartierSelect'));
    }

}
