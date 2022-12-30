<?php

namespace App\Models\Catalogs;

use App\Models\Catalogs\BioGender;
// use App\Models\Catalogs\BioPhylum;
// use App\Models\Catalogs\BioOrder;
// use App\Models\Catalogs\BioKingdom;
// use App\Models\Catalogs\BioFamily;
// use App\Models\Catalogs\BioClass;
use App\Models\Collection\Specimen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\MorphTo;
// use Illuminate\Database\Eloquent\Casts\Attribute;
// use Illuminate\Support\Carbon;


class BioSpecies extends Model
{
    use HasFactory;
    static $rules =  [

        'scientific_name' => ['required'],
        'common_name' => ['required'],
        'status' => ['required'],
        'bio_gender_id' => ['required', 'integer'],
    ];


    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];


    /**
     * Get the BioGender that owns the BioSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function BioGender(): BelongsTo
    {
        return $this->belongsTo(BioGender::class);
    }

    /**
     * Get the genus that owns the BioSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genus(): BelongsTo
    {
        //TODO: refactor BioGender to BioGenus 
        return $this->belongsTo(BioGender::class, 'bio_gender_id');
    }
}
