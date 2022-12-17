<?php

namespace App\Http\Controllers\Specimen;

use App\Http\Controllers\Controller;
use App\Models\Collection\Reptile;
use Illuminate\Http\Request;

class ReptileController extends Controller
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
     * @param  \App\Models\Collection\Reptile  $reptile
     * @return \Illuminate\Http\Response
     */
    public function show(Reptile $reptile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection\Reptile  $reptile
     * @return \Illuminate\Http\Response
     */
    public function edit(Reptile $reptile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection\Reptile  $reptile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reptile $reptile)
    {
        $data = $request->validate(Reptile::$rules);
        // dd($mammalMeasure, $data);
        // dd($data);
        $reptile->update($data);
        $reptile->refresh();

        return redirect(route('collection.edit', $reptile->specimen->id), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection\Reptile  $reptile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reptile $reptile)
    {
        //
    }
}
