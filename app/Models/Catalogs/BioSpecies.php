<?php

namespace App\Models\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BioSpecies extends Model
{
    use HasFactory;

    /**
     * Get the genus that owns the BioSpecies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genus(): BelongsTo
    {
        //TODO: refactor BioGender to BioGenus
        return $this->belongsTo(BioGender::class);
    }
}
