<?php

namespace App\Models\Specimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class MammalMeasure extends Model
{
    use HasFactory;

    static $rules = [
        'id' => ['required'],
        'gender' => ['boolean'],
        'gonads' => ['nullable', 'numeric'],
        'lt' => ['nullable', 'numeric'],
        'lc' => ['nullable', 'numeric'],
        'pt' => ['nullable', 'numeric'],
        'o' => ['nullable', 'numeric'],
        'ab' => ['nullable', 'numeric'],
        'weight' => ['nullable', 'numeric'],
        'skull' => ['nullable', 'boolean'],
        'skin' => ['nullable', 'boolean'],
        'body' => ['nullable', 'boolean'],
        'observation' => ['nullable', 'string'],
    ];
    protected $guarded = [];
    protected $casts = [
        'gender' => 'boolean',
    ];

    
    /**
     * Get the specimen associated with the MammalMeasure
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function specimen(): MorphOne
    {
        return $this->morphOne(Specimen::class, 'measurable');
    }
}
