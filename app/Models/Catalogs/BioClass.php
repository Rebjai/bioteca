<?php

namespace App\Models\Catalogs;


use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BioClass extends Model
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
        'bio_gender_id' => 'integer',
    ];


    /**
     * Get the bioPhylum that owns the BioClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bioPhylum(): BelongsTo
    {
        return $this->belongsTo(BioPhylum::class);
    }
}
