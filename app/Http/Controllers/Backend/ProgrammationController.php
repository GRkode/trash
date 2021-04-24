<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProgrammeDataTable;
use App\Http\Requests\ProgrammeResquest;
use App\Models\Agence;
use App\Models\Jour;
use App\Models\Programmation;
use App\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class ProgrammationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agences = Agence::get();
        return view('table.agence', compact('agences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Agence::get();
        $jours = [
            ['title' => 'lundi'],
            ['title' => 'mardi'],
            ['title' => 'mercredi'],
            ['title' => 'jeudi'],
            ['title' => 'vendredi'],
            ['title' => 'samedi'],
            ['title' => 'dimanche']
        ];

        return view('backend.programmes.form', compact('entreprises', 'jours'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgrammeResquest $request)
    {
        $jours = implode(",", $request->jour);
        $request->merge(['jours' => $jours]);
        Programmation::create($request->except('jour'));

        Flashy::success(config('messages.programcreated'));
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
        $programmes = Programmation::where('agence_id', $id)->with('agence', 'zone')->get();
        return view('table.programmes', compact('programmes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Programmation $programmation)
    {
        $entreprises = Agence::get();
        $jours = [
            ['title' => 'lundi'],
            ['title' => 'mardi'],
            ['title' => 'mercredi'],
            ['title' => 'jeudi'],
            ['title' => 'vendredi'],
            ['title' => 'samedi'],
            ['title' => 'dimanche']
        ];
        return view('backend.programmes.form', ['programme' => $programmation,
            'jours' => $jours,
            'entreprises'=>$entreprises]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgrammeResquest $request, Programmation $programmation)
    {
        $jours = implode(",", $request->jour);
        $request->merge(['jours' => $jours]);
        $programmation->update($request->except('jour'));

        Flashy::success(config('messages.programupdated'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programmation $programmation)
    {
        $programmation->delete();

        return redirect(route('programmes.index'));
    }

    public function alert(Programmation $programme)
    {
        return view('backend.programmes.destroy', ['programme' => $programme]);
    }
}
