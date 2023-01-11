<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Location\Location;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Localidades';
        $locations= Location::with(
            ['municipality']
        )->orderBy('id')
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'municipality' => $item->municipality,
                        'latitude' => $item->latitude,
                        'longitude' => $item->longitude,

                    ];
                }
            );
        return Inertia::render('Catalogs/Location/Index', compact('title', 'locations'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(Location::$rules);
        $location = Location::create($data);
        return redirect(route('location.edit', $location->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $location->load('municipality'); //load model relation
        return Inertia::render('Catalogs/Location/Edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $data = $request->validate(Location::$rules);
        $location->update($data);

        return redirect(route('location.index'), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
