<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plataform extends Model
{    
    protected $fillable = ['name'];
    
    public $timestamps = false;

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class, 'platform_id');
    }
}
