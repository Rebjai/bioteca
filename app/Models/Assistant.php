<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assistant extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'id'];
    protected $appends = ['name', 'fullname'];

    /**
     * Get the user that owns the Assistant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function name(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => $value,
            set: fn ($value) => $value,
        );
    }
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => $atrrs['id'] . '.- ' . "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
    }
}
