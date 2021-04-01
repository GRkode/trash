<?php

namespace App\Http\Controllers;

use App\Models\Cabine;
use App\Models\PeageVacation;
use App\Models\PrgPercepteur;
use App\Models\Sens;
use App\Models\Zone;
use Carbon\Carbon;
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
}
