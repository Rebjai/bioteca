<?php

namespace App\Models\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Catalogs\BioOrder;

class BioFamily extends Model
{
    use HasFactory;

    
    static $rules =  [

        'scientific_name' => ['required'],
        'common_name' => ['required'],
        'status' => ['required'],
        'bio_order_id' => ['required', 'integer'],
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
    ];

    public function BioOrder(): BelongsTo
    {
        return $this->belongsTo(BioOrder::class);
    }

    /**
     * Get the orderr that owns the BioFamily
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(BioOrder::class, 'bio_order_id');
    }
}
