<?php


namespace App\Http\Controllers\Family;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioFamily;
use Illuminate\Http\Request;
use Inertia\Inertia;


class FamilyController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(BioFamily::class, 'family');
        // dd($this);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $title = 'Familia';
        $BioFamily = BioFamily::with(
            ['bioOrder']
        )->latest()
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'common_name' => $item->common_name,
                        'status' => $item->status,
                        'scientific_name' => $item->scientific_name,
                        'order' => $item->order,

                    ];
                }
            );
        return Inertia::render('Family/index', compact('title', 'BioFamily'));
    }


    public function edit(BioFamily $family)
    {   
        $family->load('order'); 
        return Inertia::render('Family/Edit', compact('family'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(BioFamily::$rules);
        $BioFamily = BioFamily::create($data);
        return redirect(route('family.edit', $BioFamily->id));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(BioFamily $BioFamily)
    {
        return Inertia::render('family/Edit', compact('BioFamily'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BioFamily $family)
    {
        $data = $request->validate(BioFamily::$rules);
        $family->update($data);

        return redirect(route('family.index'), 303);
    }

   
    public function destroy(BioFamily $genus)
    {
        //
    }
}
