<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Collection\MammalMeasure;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MammalMeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return redirect(route({'specimen.edit', }))
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection\MammalMeasure  $mammalMeasure
     * @return \Illuminate\Http\Response
     */
    public function show(MammalMeasure $mammalMeasure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection\MammalMeasure  $mammalMeasure
     * @return \Illuminate\Http\Response
     */
    public function edit(MammalMeasure $mammalMeasure)
    {
        $measures = $mammalMeasure;
        return Inertia::render('collection/SpecimenMeasurements', compact('measures'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection\MammalMeasure  $mammalMeasure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MammalMeasure $mammalMeasure)
    {
        $data = $request->validate(MammalMeasure::$rules);
        // dd($mammalMeasure, $data);
        // dd($data);
        $mammalMeasure->update($data);
        $mammalMeasure->refresh();

        return redirect(route('collection.edit', $mammalMeasure->specimen_id), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection\MammalMeasure  $mammalMeasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(MammalMeasure $mammalMeasure)
    {
        //
    }
}
