<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\Assistant;
use App\Models\Catalogs\BioSpecies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

// use Illuminate\Support\Facades\Response;

class ApiAssistantController extends Controller
{

    /**
     * Search an assistant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = $request->query('name');
        $species_id = $request->query('species');
        $id = is_numeric($data) ? $data : null;
        $name = !is_numeric($data) && $data !== null ? $data : null;
        $assistants = Assistant::when(
            $id,
            function ($q, $id) {
                $q->where('id', 'like', '%' . $id . '%');
            }
        );

        $assistants->when(
            $name,
            function ($q, $name) {
                $q->orwhereRaw('upper(name) like ?', '%' . strtoupper($name) . '%');
                $q->orWhereRaw('upper(first_surname) like ?', '%' . strtoupper($name) . '%');
                $q->orWhereRaw('upper(second_surname) like ?', '%' . strtoupper($name) . '%');
                return $q->orWhereHas(
                    'user',
                    function ($q) use ($name) {
                        $q->whereRaw('upper(users.name) like ?', '%' . strtoupper($name) . '%');
                    }
                );
            }
        );

        $assistants = $assistants->limit(10)->get();
        if ($species_id) {
            $species = BioSpecies::find($species_id);
            $bioClass = $species->genus->family->order->class->scientific_name;
            // dd($species, $bioClass);
            # code...
            $assistants = $assistants->transform(
                function (Assistant $assistant, $key) use ($bioClass) {
                    $assistant->fullname = $assistant->getCollectionNumber($bioClass);
                    return $assistant;
                }
            );
        }
        $assistants->append(['fullname']);
        return Response::json(
            [$assistants->all()]
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
     * @param  \App\Models\Catalogs\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function show(Assistant $assistant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogs\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assistant $assistant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogs\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assistant $assistant)
    {
        //
    }
}
