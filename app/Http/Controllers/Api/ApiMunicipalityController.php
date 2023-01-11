<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiMunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->query('name');
        $id = is_numeric($data) ? $data : null;
        $name = !is_numeric($data) && $data !== null ? $data : null;
        $municipality = Municipality::when(
            $id,
            function ($q, $id) {
                $q->where('id', 'like', '%' . $id . '%');
            }
        );
        $municipality->when(
            $name,
            function ($q, $name) {
                $q->whereRaw('upper(name) like ?', '%' . strtoupper($name) . '%');
                // $q->orWhereRaw('upper(common_name) like ?', '%' . strtoupper($name) . '%');
            }
        );
        return Response::json(
            [$municipality->limit(10)->get()]
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
     * @param  \App\Models\Catalogs\BioGender  $bioGender
     * @return \Illuminate\Http\Response
     */
    public function show(BioGender $bioGender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogs\BioGender  $bioGender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioGender $bioGender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogs\BioGender  $bioGender
     * @return \Illuminate\Http\Response
     */
    public function destroy(BioGender $bioGender)
    {
        //
    }
}
