<?php

namespace App\Http\Controllers\Species;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use Illuminate\Http\Request;
use Inertia\Inertia;


class SpeciesController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(BioSpecies::class, 'species');
        // dd($this);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $title = 'Especies';
        $BioSpecies = BioSpecies::with(
            ['bioGender']
        )->latest()
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'common_name' => $item->common_name,
                        'status' => $item->status,
                        'scientific_name' => $item->scientific_name,
                        'genus' => $item->genus,

                    ];
                }
            );
        return Inertia::render('Species/index', compact('title', 'BioSpecies'));
    }


    public function edit(BioSpecies $species)
    {
        $BioSpecies = $species;
        $BioSpecies->load('genus'); //load model relation with upper taxonomical category
        //    dd($BioSpecies);
        return Inertia::render('Species/Edit', compact('BioSpecies'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(BioSpecies::$rules);
        $BioSpecies = BioSpecies::create($data);
        return redirect(route('species.edit', $BioSpecies->id));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(BioSpecies $BioSpecies)
    {
        return Inertia::render('Species/Edit', compact('BioSpecies'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioSpecies $species)
    {
        $data = $request->validate(BioSpecies::$rules);
        $species->update($data);

        return redirect(route('species.index'), 303);
    }

    /**
     * Delete the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function destroy(BioSpecies $bioSpecies)
    {
        //
    }
}
