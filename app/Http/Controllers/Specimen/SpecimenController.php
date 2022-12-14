<?php

namespace App\Http\Controllers\Specimen;

use App\Exports\SpecimenExport;
use App\Http\Controllers\Controller;
use App\Models\Catalogs\BioSpecies;
use App\Models\Collection\Amphibian;
use App\Models\Collection\Bird;
use App\Models\Collection\Mammal;
use App\Models\Collection\Reptile;
use App\Models\Collection\Specimen;
use DateTime;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SpecimenController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Specimen::class, 'specimen');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Colección';
        $collection_types = [Amphibian::class, Bird::class, Mammal::class, Reptile::class];
        $data = $request->validate(
            [
                'collection_type' => ['nullable', 'integer', 'max:' . count($collection_types)],
                'collection_date1' => ['nullable', 'dateFormat:d/m/Y'],
                'collection_date2' => ['nullable', 'dateFormat:d/m/Y'],
                'collector' => ['nullable'],
                'collector.id' => ['nullable', 'required_with:collector'],
                'assistant' => ['nullable'],
                'assistant.id' => ['nullable', 'required_with:assistant', 'integer'],
                'species' => ['nullable'],
                'species.id' => ['nullable', 'required_with:species', 'integer'],
                'municipality' => ['nullable'],
                'municipality.id' => ['nullable', 'required_with:municipality', 'integer'],
                'state' => ['nullable'],
                'state.id' => ['nullable', 'required_with:state', 'integer'],
            ]
        );

        $assistantUser = $request->user()->role !== 10 ? $request->user()->profile()->id : false;
        $assistant_id = $request->filled('assistant.id') && !$assistantUser ? $request->input('assistant.id') : false;
        $collector_id = $request->filled('collector.id') ? $request->input('collector.id') : false;
        $municipality_id = $request->filled('municipality.id') ? $request->input('municipality.id') : false;
        // dd( $data, $municipality_id, $request->filled('municipality.id'));
        $state_id = $request->filled('state.id') ? $request->input('state.id') : false;
        $collection_date1 = $request->filled('collection_date1') ? $request->date('collection_date1', 'd/m/Y') : false;
        $collection_date2 = $request->filled('collection_date2') ? $request->date('collection_date2', 'd/m/Y') : false;
        $species = $request->species;
        $collector = $request->collector;
        $assistant = $request->assistant;
        $municipality = $request->municipality;
        $state = $request->state;
        $advanced_search = $request->advanced_search;
        // dd($advanced_search);
        $collection_type = $request->filled('collection_type') ? $collection_types[$request->collection_type - 1] : false;
        $specimens = Specimen::with(
            ['species', 'location']
        );
        $specimens->when(
            $assistantUser,
            function (Builder $q, string $assistantUser) {
                return $q->where('assistant_id', $assistantUser);
            }
        );
        $specimens->when(
            $collection_type,
            function (Builder $q, string $collection_type) {
                return $q->where('measurable_type', $collection_type);
            }
        );
        $specimens->when(
            $collection_date1,
            function (Builder $q, string $collection_date1) {
                return $q->where('collection_date', '>', $collection_date1);
            }
        );
        $specimens->when(
            $collection_date2,
            function (Builder $q, string $collection_date2) {
                return $q->where('collection_date', '<', $collection_date2);
            }
        );
        $specimens->when(
            $collector_id,
            function (Builder $q, string $collector_id) {
                return $q->where('collector_id', $collector_id);
            }
        );
        $specimens->when(
            $assistant_id,
            function (Builder $q, string $assistant_id) {
                return $q->where('assistant_id', $assistant_id);
            }
        );
        $specimens->when(
            $municipality_id,
            function (Builder $q, int $municipality_id) {
                return $q->whereHas(
                    'location',
                    function ($q) use ($municipality_id) {
                        $q->where('municipality_id', $municipality_id);
                    }
                );
            }
        );
        $specimens->when(
            $state_id,
            function (Builder $q, int $state_id) {
                return $q->whereHas(
                    'location.municipality',
                    function ($q) use ($state_id) {
                        $q->where('state_id', $state_id);
                    }
                );
            }
        );
        // $specimens->when(
        //     $municipality_id,
        //     function ($q, $municipality_id) {
        //         return $q->whereHas(
        //             'location',
        //             function ($q) use ($municipality_id) {
        //                 $q->where('municipality_id', $municipality_id);
        //             }
        //         );
        //     }
        // );
        if ($request->path() == 'download' && $request->user()->role == 10) {
            // dd(new SpecimenExport($specimens));

            return new SpecimenExport($specimens);
        }
        $specimens = $specimens
            ->latest('collection_date')
            ->paginate(5)
            ->withQueryString()
            ->through(
                function ($item) {
                    // dd($item)
                    return [
                        'id' => $item->id,
                        'species' => $item->species,
                        'location' => $item->location,
                        'collection_name' => $item->collectionName,
                        'collection_date' => $item->collection_date,
                        // etc
                    ];
                }
            );
        $collection_type = $request->filled('collection_type') ? $request->input('collection_type') : '';
        $collection_date1 = $collection_date1 ? $collection_date1->format('d/m/Y') : null;
        $collection_date2 = $collection_date2 ? $collection_date2->format('d/m/Y') : null;
        $search_params = compact(
            'collection_type',
            'collection_date1',
            'collection_date2',
            'collector',
            'assistant',
            'species',
            'municipality',
            'state',
            'advanced_search',
        );
        // ;
        // $specimens = Specimen::with(['species', 'location'])->get();
        return Inertia::render('collection/index', compact('title', 'specimens', 'search_params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route('collection.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(Specimen::$rules);
        $specimen = Specimen::create($data);
        $species = BioSpecies::find($request->species_id);
        $newSpecimenClass = $species->genus->family->order->class->scientific_name;
        // dd($specimen);
        if ($newSpecimenClass == 'Mammalia') {
            $mammal = Mammal::create();
            $mammal->specimen()->save($specimen);
            $mammal->specimen_id = $specimen->id;
            $mammal->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Aves') {
            $bird = Bird::create();
            $bird->specimen()->save($specimen);
            $bird->specimen_id = $specimen->id;
            $bird->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Amphibia') {
            $amphibian = Amphibian::create();
            $amphibian->specimen()->save($specimen);
            $amphibian->specimen_id = $specimen->id;
            $amphibian->save();

            return redirect(route('collection.edit', $specimen->id));
        }
        if ($newSpecimenClass == 'Reptilia') {
            $reptile = Reptile::create();
            $reptile->specimen()->save($specimen);
            $reptile->specimen_id = $specimen->id;
            $reptile->save();
            // dd('mama4');

            return redirect(route('collection.edit', $specimen->id));
        }
        return back(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Specimen $specimen)
    {
        $specimen->load('measurable');
        return Inertia::render('collection/MammalCollection', compact('specimen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specimen $specimen)
    {
        $specimen->load(['measurable', 'species', 'location', 'assistant', 'collector']);
        if ($specimen->measurable_type == Mammal::class) {
            return Inertia::render('collection/MammalCollection', compact('specimen'));
        }
        if ($specimen->measurable_type == Bird::class) {
            return Inertia::render('collection/BirdCollection', compact('specimen'));
        }
        if ($specimen->measurable_type == Amphibian::class) {
            return Inertia::render('collection/AmphibianCollection', compact('specimen'));
        }
        if ($specimen->measurable_type == Reptile::class) {
            return Inertia::render('collection/ReptileCollection', compact('specimen'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specimen $specimen)
    {
        $data = $request->validate(Specimen::$rules);
        $data['modified_by_id'] = $request->user()->id;
        $specimen->update($data);
        return redirect()->back(303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('por implementar');
    }
}
