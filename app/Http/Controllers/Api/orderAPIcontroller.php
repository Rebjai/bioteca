<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class orderAPIcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->query('name');
        $id = is_numeric($data) ? $data : null;
        $name = !is_numeric($data) && $data !== null ? $data : null;
        $order = BioOrder::when(
            $id,
            function ($q, $id) {
                $q->where('id', 'like', '%' . $id . '%');
            }
        );
        $order->when(
            $name,
            function ($q, $name) {
                $q->whereRaw('upper(scientific_name) like ?', '%' . strtoupper($name) . '%');
               // $q->orWhereRaw('upper(common_name) like ?', '%' . strtoupper($name) . '%');
            }
        );
        return Response::json(
            [$order->limit(10)->get()]
        );
    }
    /**
     * Search resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
       //
    }

    
 
    public function store(Request $request)
    {
        //
    }

   
}