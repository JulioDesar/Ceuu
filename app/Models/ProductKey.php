<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductKey extends Model
{
    protected $fillable = ['offer_id', 'key_value', 'used_at'];
    
    public $timestamps = false;

    protected $casts = [
        'used_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
