<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Collection\Mammal;
use App\Models\Utils\SpecimenAge;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Inertia\Inertia;

class MammalController extends Controller
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
     * @param  \App\Models\Collection\Mammal  $Mammal
     * @return \Illuminate\Http\Response
     */
    public function show(Mammal $Mammal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection\Mammal  $Mammal
     * @return \Illuminate\Http\Response
     */
    public function edit(Mammal $Mammal)
    {
        $measures = $Mammal;
        return Inertia::render('collection/MammalCollection', compact('measures'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection\Mammal  $Mammal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mammal $Mammal)
    {
        $data = $request->validate(Mammal::$rules);
        $request->validate(['age' => new Enum(SpecimenAge::class)]);
        // dd($Mammal, $data);
        // dd($data);
        $Mammal->update($data);
        $Mammal->specimen->modified_by_id = $request->user()->id;
        $Mammal->specimen->save();
        $Mammal->refresh();

        return redirect(route('collection.edit', $Mammal->specimen->id), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection\Mammal  $Mammal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mammal $Mammal)
    {
        //
    }
}
