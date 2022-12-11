<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Assistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AssistantController extends Controller
{

    /**
     * Search an assistant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = $request->name;
        $id = is_numeric($data) ? $data : null;
        // dd($data);
        $assistants = Assistant::when(
            $id,
            function ($q, $id) {
                $q->where('id', 'like', '%' . $id . '%');
            }
        );

        $assistants->when(
            $data,
            function ($q, $data) {
                return $q->whereHas(
                    'user',
                    function ($q) use ($data) {
                        $q->whereRaw('upper(name) like ?', '%' . strtoupper($data) . '%');
                    }
                );
            }
        );
        return Response::json(
            [
                Assistant::latest()->limit(10)->get()
            ]
        );
        //
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
     * @param  \App\Models\Assistant  $assistant
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
     * @param  \App\Models\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assistant $assistant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assistant $assistant)
    {
        //
    }
}
