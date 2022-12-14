<?php

namespace App\Models\Collection;

use App\Models\Catalogs\Assistant;
use App\Models\Catalogs\BioSpecies;
use App\Models\Catalogs\Collector;
use App\Models\Location\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

class Specimen extends Model
{
    use HasFactory;
    static $rules =  [
        'id' => ['nullable'],
        'creator_id' => ['required', 'integer'],
        'collection_date' => ['required', 'date_format:d/m/Y'],
        'species_id' => ['required', 'integer'],
        'location_id' => ['required', 'integer'],
        'locality' => ['required', 'string'],
        'latitude' => ['required', 'numeric'],
        'longitude' => ['required', 'numeric'],
        'altitude' => ['required', 'numeric'],
        'collector_id' => ['required', 'integer'],
        'collector_number' => ['required_with:id', 'integer'],
        'assistant_id' => ['required', 'integer'],
        'assistant_number' => ['required_with:id', 'integer'],
    ];
    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
        'collection_date' => 'date:d/m/Y',
    ];

    protected $appends = ['collection_name'];

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
        if ($str == Mammal::class) {
            return 'Mam??feros';
        }
        if ($str == Reptile::class) {
            return 'Reptiles';
        }
        if ($str == Bird::class) {
            return 'Aves';
        }
        if ($str == Amphibian::class) {
            return 'Anfibios';
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

    /**
     * Get the assistant that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assistant(): BelongsTo
    {
        return $this->belongsTo(Assistant::class);
    }
    /**
     * Get the collector that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collector(): BelongsTo
    {
        return $this->belongsTo(Collector::class);
    }

    /**
     * Get the creator that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the modifiedBy that owns the Specimen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    public function collectionDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) => (new Carbon($value))->format('d/m/Y'),
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->toDateTime(),
        );
    }
    // public function setDateAttribute( $value ) {
    //     $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    //   }


    static function getCollectionClass(string $str)
    {
        # code...
        if ($str == 'Mammalia') {
            return Mammal::class;
        }
        if ($str == 'Aves') {
            return Bird::class;
        }
        if ($str == 'Amphibia') {
            return Amphibian::class;
        }
        if ($str == 'Reptilia') {
            return Reptile::class;
        }
    }
}
