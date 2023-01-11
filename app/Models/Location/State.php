<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    static $rules = [
        'name'=>['required', 'string'],
        // 'state_id'=>['required', 'integer'],
    ];

    protected $fillable = ['name'];
    protected $appends =['fullname'];

    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $this->name,
            set: fn ($value) => $value,
        );
    }
    use HasFactory;
}
