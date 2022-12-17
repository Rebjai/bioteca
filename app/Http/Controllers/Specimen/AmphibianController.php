<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Collection\Amphibian;
use App\Models\Utils\SpecimenAge;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class AmphibianController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection\Amphibian  $amphibian
     * @return \Illuminate\Http\Response
     */
    public function show(Amphibian $amphibian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection\Amphibian  $amphibian
     * @return \Illuminate\Http\Response
     */
    public function edit(Amphibian $amphibian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection\Amphibian  $amphibian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amphibian $amphibian)
    {
        $data = $request->validate(Amphibian::$rules);
        $request->validate(['age' => new Enum(SpecimenAge::class)]);
        // dd($mammalMeasure, $data);
        // dd($data);
        $amphibian->update($data);
        $amphibian->refresh();

        return redirect(route('collection.edit', $amphibian->specimen->id), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection\Amphibian  $amphibian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amphibian $amphibian)
    {
        //
    }
}
