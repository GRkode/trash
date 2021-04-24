<?php

namespace App\Http\Controllers\Backend;

use App\Models\Arrondissement;
use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Quartier;
use App\Models\Zone;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getZone(Request $request)
    {
        if ($request->ajax()) {
            $states = Zone::where('entreprise_id', $request->id)->get();
            $data = view('ajax.ajax-select', compact('states'))->render();
            return response()->json(['options' => $data, 'options2' => $data2, 'options3' => $data3]);
        }
    }

    public function getCommune(Request $request)
    {
        if ($request->ajax()) {
            $states = Commune::where('departement_id', $request->id)->orderBy('title', 'ASC')->get();
            $data = view('ajax.ajax-select',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }

    public function getArrondissement(Request $request)
    {
        if ($request->ajax()) {
            $states = Arrondissement::where('commune_id', $request->id)->orderBy('title', 'ASC')->get();
            $data = view('ajax.arrondissement',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }

    public function getQuartier(Request $request)
    {
        if ($request->ajax()) {
            $states = Quartier::where('arrondissement_id', $request->id)->orderBy('title', 'ASC')->get();
            $data = view('ajax.quartier',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}
