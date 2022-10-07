<?php

namespace App\Models\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BioClass extends Model
{
    use HasFactory;
    /**
     * Get the bioPhylum that owns the BioClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bioPhylum(): BelongsTo
    {
        return $this->belongsTo(BioPhylum::class);
    }
}
