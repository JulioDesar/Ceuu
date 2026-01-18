<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = ['name', 'slug'];

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }
}
