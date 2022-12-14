<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use App\Models\Collection\Amphibian;
use App\Models\Collection\Bird;
use App\Models\Collection\MammalMeasure;
use App\Models\Collection\Reptile;
use App\Models\Collection\Specimen;
use DateTime;
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
        $specimens = Specimen::with(
            ['species', 'location']
        )->latest()
            ->paginate(5)
            ->through(
                function ($item) {
                    // dd($item)
                    return [
                        'id' => $item->id,
                        'species' => $item->species,
                        'location' => $item->location,
                        'collection_name' => $item->collectionName,
                        'collection_date' => $item->collection_date,
                        // etc
                    ];
                }
            );
        // ;
        // $specimens = Specimen::with(['species', 'location'])->get();
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
        $newSpecimenClass = $species->genus->family->order->class->scientific_name;

        if ($newSpecimenClass == 'Mammalia') {
            $mammal = MammalMeasure::create();
            $mammal->specimen()->save($specimen);
            $mammal->specimen_id = $specimen->id;
            $mammal->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Aves') {
            $bird = Bird::create();
            $bird->specimen()->save($specimen);
            $bird->specimen_id = $specimen->id;
            $bird->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Amphibia') {
            $amphibian = Amphibian::create();
            $amphibian->specimen()->save($specimen);
            $amphibian->specimen_id = $specimen->id;
            $amphibian->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Reptilia') {
            $reptile = Reptile::create();
            $reptile->specimen()->save($specimen);
            $reptile->specimen_id = $specimen->id;
            $reptile->save();

            return redirect(route('collection.edit', $specimen->id));
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
        $specimen->load('measurable');
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
        // dd($specimen);
        // dd('aaa');
        $specimen->load(['measurable', 'species', 'location', 'assistant']);
        if ($specimen->measurable_type == MammalMeasure::class) {
            return Inertia::render('collection/SpecimenMeasurements', compact('specimen'));
        }
        if ($specimen->measurable_type == Bird::class) {
            return Inertia::render('collection/BirdCollection', compact('specimen'));
        }
        if ($specimen->measurable_type == Amphibian::class) {
            return Inertia::render('collection/AmphibianCollection', compact('specimen'));
        }
        if ($specimen->measurable_type == Reptile::class) {
            return Inertia::render('collection/ReptileCollection', compact('specimen'));
        }
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
