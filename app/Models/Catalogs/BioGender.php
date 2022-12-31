<?php

namespace App\Models\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Catalogs\BioFamily;

class BioGender extends Model
{
    use HasFactory;

    static $rules =  [

        'scientific_name' => ['required'],
        'common_name' => ['required'],
        'status' => ['required'],
        'bio_family_id' => ['required', 'integer'],
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];

    public function BioFamily(): BelongsTo
    {
        return $this->belongsTo(BioFamily::class);
    }

 
    /**
     * Get the Family that owns the BioGender
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family(): BelongsTo
    {
        return $this->belongsTo(BioFamily::class, 'bio_family_id');
    }
}
