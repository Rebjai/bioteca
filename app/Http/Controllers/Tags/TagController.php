<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\Specimen\Specimen;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TagController extends Controller
{
    /**
     * Show the tag for specimen
     */
    public function show(Specimen $specimen)
    {

        $specimen->load(['measurable', 'location', 'species']);
        # code...
        return Inertia::render('Tags/MammalTag', compact('specimen'));
    }
}
