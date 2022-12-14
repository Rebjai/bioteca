<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Collection\Bird;
use App\Models\Utils\SpecimenAge;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class BirdController extends Controller
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
     * @param  \App\Models\Collection\Bird  $bird
     * @return \Illuminate\Http\Response
     */
    public function show(Bird $bird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection\Bird  $bird
     * @return \Illuminate\Http\Response
     */
    public function edit(Bird $bird)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection\Bird  $bird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bird $bird)
    {
        $data = $request->validate(Bird::$rules);
        $request->validate(['age' => new Enum(SpecimenAge::class)]);
        // dd($Mammal, $data);
        // dd($data);
        $bird->update($data);
        $bird->specimen->modified_by_id = $request->user()->id;
        $bird->specimen->save();
        $bird->refresh();

        return redirect(route('collection.edit', $bird->specimen->id), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection\Bird  $bird
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bird $bird)
    {
        //
    }
}
