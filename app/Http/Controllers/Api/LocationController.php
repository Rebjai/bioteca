<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class LocationController extends Controller
{

    /**
     * Search resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = $request->query('name');
        $splitted = explode(',', $data);
        $location = $splitted[0];
        $municipality = count($splitted) > 1 ? $splitted[1] : null;
        $state = count($splitted) > 2 ? $splitted[2] : null;
        $municipality_id = $request->query('municipality_id');
        

        $species = Location::whereRaw('upper(name) like ?', '%' . strtoupper($location) . '%');
        $species->when(
            $municipality_id,
            function ($q, $municipality_id) {
                return $q->where('municipality_id', '=', $municipality_id);
            }
        );
        $species->when(
            $municipality,
            function ($q, $municipality) {
                return $q->orWhereHas(
                    'municipality',
                    function ($q) use ($municipality) {
                        $q->where('name', 'like', '%' . $municipality . '%');
                    }
                );
            }
        );
        $species->when(
            $state,
            function ($q, $state) {
                return $q->whereHas(
                    'municipality.state',
                    function ($q) use ($state) {
                        $q->whereRaw('upper(name) like ?', '%' . strtoupper($state) . '%');
                    }
                );
            }
        );
        // ->orWhere('type', 'like', '%' . $data . '%')
        // ->orWhereHas(
        //     'municipality',
        //     function ($q) use ($data) {
        //         $q->where('name', 'like', '%' . $data . '%');
        //     }
        // )
        return Response::json(
            [
                $species->limit(20)->get()
            ]
        );
    }

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
     * @param  \App\Models\Location\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
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
        //
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
