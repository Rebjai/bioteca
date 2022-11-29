<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use App\Models\Specimen\MammalMeasure;
use App\Models\Specimen\Specimen;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SpecimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Colección';
        // $specimens = Specimen::with(['species','measurable', 'location'])->get();
        $specimens = Specimen::with(['species', 'location'])->get();
        return Inertia::render('collection/index', compact('title', 'specimens'));
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
        $data = $request->validate(Specimen::$rules);
        $specimen = Specimen::create($data);
        $species = BioSpecies::find($request->species_id);

        if ($species->genus->family->order->class->scientific_name == 'Mammalia') {
            $mammal = MammalMeasure::create();
            $mammal->specimen()->save($specimen);
            $mammal->save();
            // $specimen->measurable_id = $mammal->id;
            // $specimen->measurable_type = 'Mammal';

            return redirect(route('mammal-measure.edit', $mammal->id));
        }
        return back(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Specimen $specimen)
    {
        // dd($specimen);
        return Inertia::render('collection/SpecimenMeasurements', compact('specimen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specimen $specimen)
    {
        // dd($specimen);
        $specimen->load('measurable');
        return Inertia::render('collection/SpecimenMeasurements', compact('specimen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('por implementar');
    }
}
