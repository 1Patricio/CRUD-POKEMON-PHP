<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coach extends Model  // coach_id --> Chave estrangeira
{
    public function pokemons(): HasMany
    {
        return $this->hasMany(Pokemon::class);
    }

    protected $fillable = [
        'nome'
    ];
}
