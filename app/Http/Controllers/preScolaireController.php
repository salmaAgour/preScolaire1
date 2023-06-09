<?php

namespace App\Http\Controllers;

use App\Models\test_m_s;
use App\Models\carteId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class preScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = test_m_s::all();
        return view('home', ['units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createF');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $unit=new test_m_s();
        $unit->commune=$request->input('commune');
        $unit->nom=$request->input('nomU');
        $unit->type=$request->input('typeU');
        $unit->assoc=$request->input('assoc');
        $unit->etab=$request->input('etab');
        $unit->nbClasses=$request->input('nbrC');
        $unit->anneeSco=$request->input('anneeSc');
        $unit->save();

        sleep(5);

        if ($unit->save()) {
        $carte=new carteId();
        $carte->idU=$unit->id;
        $carte->nomR=$request->input('nomR');
        $carte->CIN=$request->input('CIN');
        $carte->nomU=$request->input('nomU');
        $carte->typeU=$request->input('typeU');
        $carte->assoc=$request->input('assoc');
        $carte->nbrC=$request->input('nbrC');
        $carte->anneeSco=$request->input('anneeSc');
        $carte->save();
    }

        // $unit=DB::insert('insert into test_m_s (commune,nom,type,assoc,etab,nbClasses,anneeSco) values (?,?,?,?,?,?,?)', 
        // [$request->input('commune'),$request->input('nomU'),$request->input('typeU'),$request->input('assoc')
        // ,$request->input('etab'),$request->input('nbrC'),$request->input('anneeSc')]);

        // sleep(5);
        
        // $carte=DB::insert('insert into carte_ids (nomR,CIN,nomU,typeU,assoc,nbrC,anneeSco) values (?,?,?,?,?,?,?)', 
        // [$request->input('nomR'),$request->input('CIN'),$request->input('nomU'),$request->input('typeU')
        // ,$request->input('assoc'),$request->input('nbrC'),$request->input('anneeSc')]);

        return redirect()->route('prescolaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = test_m_s::findorfail($id);
        return view('show', ['unit' => $unit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        $id=DB::table('carte_ids')->join('test_m_s','test_m_s.id' , '=' , 'carte_ids.idU')
                                  ->first(); 
        return view('editF', ['item' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unit =test_m_s::findOrFail($id);
        $unit->commune=$request->input('commune');
        $unit->nom=$request->input('nomU');
        $unit->type=$request->input('typeU');
        $unit->assoc=$request->input('assoc');
        $unit->etab=$request->input('etab');
        $unit->nbClasses=$request->input('nbrC');
        $unit->anneeSco=$request->input('anneeSc');
        $unit->save();
        sleep(5);
        if ($unit->save()) {
            $carte=carteId::findorFail($id);
            $carte->nomR=$request->input('nomR');
            $carte->CIN=$request->input('CIN');
            $carte->nomU=$request->input('nomU');
            $carte->typeU=$request->input('typeU');
            $carte->assoc=$request->input('assoc');
            $carte->nbrC=$request->input('nbrC');
            $carte->anneeSco=$request->input('anneeSc');
            $carte->save();}

        return redirect()->route('prescolaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request)
    {
        $request->validate([
            'commune' => 'required',
            'etab' => 'required',
            'unit' => 'required',
        ]);

        $commune = $request->input('commune');
        $etab = $request->input('etab');
        $unit = $request->input('unit');
        $anneeSco = $request->input('anneeSco');
        $units = DB::table('test_m_s')->where('commune', $commune)
            ->where('etab',$etab)
            ->where('nom',$unit)
            ->where('anneeSco',$anneeSco)
            ->get();

        return view('searchResults', ['units' => $units]);
    }
}
