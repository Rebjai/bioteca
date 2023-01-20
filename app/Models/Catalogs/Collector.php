<?php

namespace App\Models\Catalogs;

use App\Models\Collection\Specimen;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collector extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'first_surname', 'second_surname'];
    static $rules = [
        'name' => ['required'],
        'first_surname' => ['required'],
        'second_surname' => ['required'],
    ];
    protected $collectionNumber = null;
    protected $appends = ['fullname', 'label'];
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
    }
    public function label(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => ($this->collectionNumber?:$atrrs['id']) . '.- ' . "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
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

    /**
     *Get the count of a specific collection type
     *
     * @return string
     */
    public function getCollectionNumber(string $bioClass = 'Mammalia')
    {
        $collectionClassName=Specimen::getCollectionClass($bioClass);
        $this->collectionNumber =  $this->specimens()->where('measurable_type', $collectionClassName)->count();
        $fullname = $this->collectionNumber. '.-11111 ' . "$this->name $this->first_surname $this->second_surname";
        // dd($fullname);
        return $this->collectionNumber;
    }

}
