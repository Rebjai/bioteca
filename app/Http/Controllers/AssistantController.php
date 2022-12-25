<?php

namespace App\Http\Controllers;

use App\Models\Catalogs\Assistant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants = Assistant::latest('updated_at')->paginate(5)->through(
            function (Assistant $item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'first_surname' => $item->first_surname,
                    'second_surname' => $item->second_surname,
                    'created_at' => $item->created_at,
                    'user' => $item->user,
                ];
            }
        );
        return Inertia::render('Assistant/Index', compact('assistants'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(Assistant::$rules);
        $assistant = Assistant::create($data);
        return redirect(route('assistant.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function show(Assistant $assistant)
    {
        return Inertia::render('Assistant/Edit', compact('assistant'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistant $assistant)
    {
        return Inertia::render('Assistant/Edit', compact('assistant'));
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
        $data = $request->validate(Assistant::$rules);
        $assistant->update($data);

        return redirect(route('assistant.index'), 303);
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
