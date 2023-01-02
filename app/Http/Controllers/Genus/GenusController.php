<?php


namespace App\Http\Controllers\Genus;

use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioGender;
use Illuminate\Http\Request;
use Inertia\Inertia;


class GenusController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(BioGender::class, 'genus');
        // dd($this);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $title = 'Genero';
        $BioGender = BioGender::with(
            ['bioFamily']
        )->latest()
            ->paginate(5)
            ->through(
                function ($item) {

                    return [
                        'id' => $item->id,
                        'common_name' => $item->common_name,
                        'status' => $item->status,
                        'scientific_name' => $item->scientific_name,
                        'family' => $item->family,

                    ];
                }
            );
        return Inertia::render('Genus/index', compact('title', 'BioGender'));
    }


    public function edit( $genus)
    {   
        $genus=BioGender::find($genus);
        $genus->load('family'); 
        return Inertia::render('Genus/Edit', compact('genus'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(BioGender::$rules);
        $BioGender = BioGender::create($data);
        return redirect(route('genus.edit', $BioGender->id));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function show(BioGender $BioGender)
    {
        return Inertia::render('genus/Edit', compact('BioGender'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogs\BioSpecies  $bioSpecies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $genus)
    {
        $genus=BioGender::find($genus);
        $data = $request->validate(BioGender::$rules);
        $genus->update($data);
        return redirect(route('genus.index'), 303);
    }
// public function update(Request $request, BioGender $genus)
// {
//     $data = $request->validate(BioGender::$rules);
//     $genus->update($data);
//     dd($genus);
//     return redirect(route('genus.index'), 303);
// }

   
    public function destroy(BioGender $genus)
    {
        //
    }
}
