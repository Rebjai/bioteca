<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\Collector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiCollectorController extends Controller
{


    /**
     * Display a listing of the resource.
     * 
     * @param Request $request 
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = $request->query('name');
        $id = is_numeric($data) ? $data : null;
        $name = !is_numeric($data) && $data !== null ? $data : null;
        $collectors = Collector::when(
            $id,
            function ($q, $id) {
                $q->where('id', 'like', '%' . $id . '%');
            }
        );

        $collectors->when(
            $name,
            function ($q, $name) {
                // return $q->whereHas(
                // 'user',
                // function ($q) use ($name) {
                $q->whereRaw('upper(name) like ?', '%' . strtoupper($name) . '%');
                $q->orWhereRaw('upper(first_surname) like ?', '%' . strtoupper($name) . '%');
                $q->orWhereRaw('upper(second_surname) like ?', '%' . strtoupper($name) . '%');
                // }
                // );
            }
        );
        return Response::json(
            [$collectors->limit(10)->get()]
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
     * @param  \App\Models\Catalogs\Collector  $collector
     * @return \Illuminate\Http\Response
     */
    public function show(Collector $collector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogs\Collector  $collector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collector $collector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogs\Collector  $collector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collector $collector)
    {
        //
    }
}
