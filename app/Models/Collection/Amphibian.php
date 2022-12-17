<?php

namespace App\Models\Collection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Amphibian extends Model
{
    use HasFactory;
    static $rules = [
        // 'id' => ['required'],
        'age' => ['integer'],
        'gender' => ['boolean'],
        // 'gonads' => ['nullable', 'numeric'],
        'total_length' => ['nullable', 'numeric'],
        'tail_length' => ['nullable', 'numeric'],
        'snout_vent_length' => ['nullable', 'numeric'],
        'weight' => ['nullable', 'numeric'],
        'skull' => ['nullable', 'boolean'],
        'skin' => ['nullable', 'boolean'],
        'body' => ['nullable', 'boolean'],
        'observation' => ['nullable', 'string'],
    ];
    protected $guarded = ['id'];
    protected $casts = [
        'gender' => 'boolean',
    ];

    /**
     * Get the specimen associated with the Amphibian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function specimen(): MorphOne
    {
        return $this->morphOne(Specimen::class, 'measurable');
    }
}
