<?php

namespace App\Models\Catalogs;

use App\Models\Collection\Specimen;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assistant extends Model
{
    use HasFactory;
    static $rules = [
        'name' => ['required'],
        'first_surname' => ['required'],
        'second_surname' => ['required'],
    ];
    protected $fillable = ['user_id', 'id', 'name', 'first_surname', 'second_surname'];
    protected $appends = ['fullname'];

    protected $collectionNumber = null;

    /**
     * Get the user that owns the Assistant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the specimens for the Collector
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specimens(): HasMany
    {
        return $this->hasMany(Specimen::class);
    }


    public function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => ($this->getCollectionNumber() ?: $atrrs['id']) . '.- ' . "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
    }

    /**
     *Get the count of a specific collection type
     *
     * @return string
     */
    public function getCollectionNumber()
    {
        $this->collectionNumber =  $this->specimens()->count();
        return $this->collectionNumber;
    }
}
