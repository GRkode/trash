<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getZone(Request $request)
    {
        if ($request->ajax())
        {
            $states = Agence::findOrFail($request->id);
            $data = view('ajax.zone',compact('states'))->render();
            return response()->json(['options'=>$data]);
        }
    }

    public function setHistory(Request $request)
    {
        return response()->json(['success' => $request->all()]);
    }
}
