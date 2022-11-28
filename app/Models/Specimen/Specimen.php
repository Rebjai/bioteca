<?php

namespace App\Models\Specimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Specimen extends Model
{
    use HasFactory;
    static $rules =  [
        'collection_date'=>['required', 'date'],
        'species_id'=>['required','integer'],
        'location_id'=>['required', 'integer'],
        'latitude'=>['required'],
        'longitude'=>['required'],
        'altitude'=>['required'],
        'collector'=>['required'],
        'assistant_id'=>['required'],
    ];
    protected $guarded = [];

    /**
     * Get the measurable associated with the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function measurable(): MorphTo
    {
        return $this->morphTo();
    }
}
