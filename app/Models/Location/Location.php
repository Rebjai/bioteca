<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;

    static $rules = [
        'name'=>['required', 'string'],
        'zip_code'=>['required', 'string'],
        'latitude'=>['required', 'numeric'],
        'longitude'=>['required', 'numeric'],
        'altitude'=>['required', 'numeric'],
        'municipality_id'=>['required', 'integer'],
    ];

    protected $fillable = ['name', 'zip_code', 'latitude', 'longitude', 'altitude', 'municipality_id'];
    protected $appends = ['fullname'];

    /**
     * Get the municipality that owns the Location
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    /**
     * Attribute name
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $attr) => $this->municipality->state->name.', '.$this->municipality->name.', '.$this->name,
            set: fn ($value) => $value,
        );
    }
}
