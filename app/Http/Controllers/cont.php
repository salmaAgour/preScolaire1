<?php

namespace App\Http\Controllers;

use App\Models\testM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cont extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = testM::all();
        return view('home', ['units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = testM::findorfail($id);
        return view('show', ['unit' => $unit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
        $nom = $request->input('nom');
        $unit = DB::table('test_m_s')->where('nom', $nom)->get();

        return view('searchResults', ['unit' => $unit]);
    }
}
