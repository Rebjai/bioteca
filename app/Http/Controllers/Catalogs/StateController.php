<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Location\State;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StateController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(State::class, 'state');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Estados';
        $states = State::orderBy('id')
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'name' => $item->name,
                        // 'country' => $item->country,
                    ];
                }
            );
        return Inertia::render('Catalogs/State/Index', compact('title', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(State::$rules);
        $state = State::create($data);
        return redirect(route('state.edit', $state->id));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        // $state->load('state'); //load model relation
        return Inertia::render('Catalogs/State/Edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $data = $request->validate(State::$rules);
        $state->update($data);

        return redirect(route('state.index'), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
    }
}
