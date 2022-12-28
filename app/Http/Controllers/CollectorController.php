<?php

namespace App\Http\Controllers;

use App\Models\Catalogs\Collector;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Colectores';
        $collectors = Collector::latest('updated_at')->paginate(5)->through(
            function (Collector $item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'first_surname' => $item->first_surname,
                    'second_surname' => $item->second_surname,
                    'created_at' => $item->created_at
                ];
            }
        );
        return Inertia::render('Collector/Index', compact('collectors', 'title'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(Collector::$rules);
        $collector = Collector::create($data);
        return redirect(route('collector.edit', $collector->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\Collector  $collector
     * @return \Illuminate\Http\Response
     */
    public function show(Collector $collector)
    {
        return Inertia::render('Collector/Edit', compact('collector'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\Collector  $collector
     * @return \Illuminate\Http\Response
     */
    public function edit(Collector $collector)
    {
        return Inertia::render('Collector/Edit', compact('collector'));
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
        $data = $request->validate(Collector::$rules);
        $collector->update($data);

        return redirect(route('collector.index'), 303);
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
