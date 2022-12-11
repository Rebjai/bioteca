<?php

namespace App\Models\Specimen;

use App\Models\Catalogs\BioSpecies;
use App\Models\Location\Location;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Specimen extends Model
{
    use HasFactory;
    static $rules =  [
        'collection_date' => ['required', 'date'],
        'species_id' => ['required', 'integer'],
        'location_id' => ['required', 'integer'],
        'latitude' => ['required'],
        'longitude' => ['required'],
        'altitude' => ['required'],
        'collector' => ['required'],
        'assistant_id' => ['required'],
    ];
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
        'collection_date' => 'datetime:d-m-Y',
    ];

    // protected $appends=['collection_name'];

    /**
     * Get the measurable associated with the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function measurable(): MorphTo
    {
        return $this->morphTo();
    }


    /**
     * attribute  Collection Type Name
     */
    public function collectionName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->getColectionName($this->measurable_type),
            set: fn ($value) => $value,
        );
    }

    /**
     * Get Collection Type Name
     */

    public function getColectionName($str)
    {
        if ($str == 'App\Models\Specimen\MammalMeasure') {
            return 'Mamíferos';
        }
    }

    /**
     * Get the species that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function species(): BelongsTo
    {
        return $this->belongsTo(BioSpecies::class, 'species_id');
    }

    /**
     * Get the location that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
