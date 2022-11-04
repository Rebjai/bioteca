<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class speciesAPIController extends Controller
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
     * Search resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = $request->query('name');
        if (!$data) {
            return BioSpecies::limit(10)->get();
        }

        $species = BioSpecies::where('scientific_name', 'ilike', "%{$data}%")
            // ->orWhere('common_name', 'like', "%{$data}%")->limit(50)
            ->limit(20)
            ->get();

        return Response::json(
            [
                $species
            ]
        );
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
     * @param  \App\Models\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(BioSpecies $bioSpecies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioSpecies $bioSpecies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function destroy(BioSpecies $bioSpecies)
    {
        //
    }
}
