<?php

namespace App\Http\Controllers\Species;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('species/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(BioSpecies $bioSpecies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function edit(BioSpecies $bioSpecies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioSpecies $bioSpecies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function destroy(BioSpecies $bioSpecies)
    {
        //
    }
}
