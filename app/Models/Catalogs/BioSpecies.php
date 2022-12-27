<?php

namespace App\Models\Catalogs;
use App\Models\Catalogs\BioGender;
use App\Models\Catalogs\BioPhylum;
use App\Models\Catalogs\BioOrder;
use App\Models\Catalogs\BioKingdom;
use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioClass;
use App\Models\Collection\Specimen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;


class BioSpecies extends Model
{
    use HasFactory;
    static $rules =  [
        
        'scientific_name' => ['required'],
        'common_name' => ['required'],
        'status' => ['required'],
        'bio_gender_id' => ['required', 'integer'],
    ];


    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];

    // protected $appends=['catalogs_name'];

    // public function measurable(): MorphTo
    // {
    //     return $this->morphTo();
    // }
  
    // public function catalogsName(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => $this->getCatalogsName($this->measurable_type),
    //         set: fn ($value) => $value,
    //     );
    // }


    // public function getCatalogsName($str)
    // {
    //     if ($str == BioClass::class) {
    //         return 'Clase';
    //     }
    //     if ($str == BioFamily::class) {
    //         return 'Familia';
    //     }
    //     if ($str == BioGender::class) {
    //         return 'Genero';
    //     }
    //     if ($str == BioKingdom::class) {
    //         return 'Reino';
    //     }
    //     if ($str == BioOrder::class) {
    //         return 'Orden';
    //     }
    //     if ($str == BioPhylum::class) {
    //         return 'Filo';
    //     }
    // }
 
/*
    public function collectionName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->getColectionName($this->measurable_type),
            set: fn ($value) => $value,
        );
    }
*/
/*
    public function getColectionName($str)
    {
        if ($str == MammalMeasure::class) {
            return 'Mamíferos';
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
*/
    
    // public function biokingdom(): BelongsTo
    // {
    //     return $this->belongsTo(BioKingdom::class);
    // }
    // public function bioclass(): BelongsTo
    // {
    //     return $this->belongsTo(BioClass::class);
    // }
    // public function biofamily(): BelongsTo
    // {
    //     return $this->belongsTo(BioFamily::class);
    // }

    public function BioGender(): BelongsTo
    {
        return $this->belongsTo(BioGender::class);
    }

    // public function biophylum(): BelongsTo
    // {
        // return $this->belongsTo(BioPhylum::class);
    // }

 

    /**
     * Get the genus that owns the BioSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function bioorder(): BelongsTo
    // {
    //     //TODO: refactor BioGender to BioGenus 
    //     return $this->belongsTo(BioOrder::class, 'bio_order_id');
    // }
}
