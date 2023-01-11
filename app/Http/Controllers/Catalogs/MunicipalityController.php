<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Location\Municipality;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MunicipalityController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Municipality::class, 'municipality');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Municipios';
        $municipalities= Municipality::with(
            ['state']
        )->orderBy('id')
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        'state' => $item->state,
                    ];
                }
            );
        return Inertia::render('Catalogs/Municipality/Index', compact('title', 'municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(Municipality::$rules);
        $municipality = Municipality::create($data);
        return redirect(route('municipality.edit', $municipality->id));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipality $municipality)
    {
        $municipality->load('state'); //load model relation
        return Inertia::render('Catalogs/Municipality/Edit', compact('municipality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipality $municipality)
    {
        $data = $request->validate(Municipality::$rules);
        $municipality->update($data);

        return redirect(route('municipality.index'), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        //
    }
}
