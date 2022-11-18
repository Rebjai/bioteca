<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;

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
    public function name(): Attribute
    {
        return new Attribute(
            get: fn ($value, $attr) => strtoupper($value).', '.$this->municipality->name.', '.$this->municipality->state->name,
            set: fn ($value) => $value,
        );
    }
}
