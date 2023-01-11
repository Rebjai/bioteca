<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Municipality extends Model
{
    use HasFactory;

    static $rules = [
        'name'=>['required', 'string'],
        'state_id'=>['required', 'integer'],
    ];

    protected $fillable = ['name', 'state_id'];


    protected $appends =['fullname'];

    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->name. ', '.strtoupper($this->state->name),
            set: fn ($value) => $value,
        );
    }

    /**
     * Get the state that owns the Municipality
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
