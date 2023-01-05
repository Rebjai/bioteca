<?php

namespace App\Models\Collection;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Bird extends Model
{
    use HasFactory;
    static $rules = [
        // 'id' => ['required'],
        'age' => ['integer'],
        'gender' => ['boolean'],
        'gonads_heigth' => ['nullable', 'numeric'],
        'gonads_width' => ['nullable', 'numeric'],
        'total_length' => ['nullable', 'numeric'],
        'cv' => ['nullable', 'numeric'],
        'wingspan' => ['nullable', 'numeric'],
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
     * Get the specimen associated with the Bird
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function specimen(): MorphOne
    {
        return $this->morphOne(Specimen::class, 'measurable');
    }

    /**
     * Get the measure text to print on the tag associated with the Bird
     *
     * @return Attribute
     */
    public function measures(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->total_length .
                '-' . $this->cv .
                '-' . $this->wingspan .
                '≡' . $this->weight,
            set: fn ($value) => $value,
        );
    }
}
