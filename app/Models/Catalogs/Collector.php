<?php

namespace App\Models\Catalogs;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'first_surname', 'second_surname'];
    static $rules = [
        'name' => ['required'],
        'first_surname' => ['required'],
        'second_surname' => ['required'],
    ];
    protected $appends = ['fullname'];
    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $atrrs) => $atrrs['id'] . '.- ' . "$this->name $this->first_surname $this->second_surname",
            set: fn ($value) => $value,
        );
    }
}
