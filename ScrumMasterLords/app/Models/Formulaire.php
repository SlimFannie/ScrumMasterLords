<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    public function formulaires() : HasMany {
        return $this->hasMany('App\Formulaire_atelier_mecanique_rapport_accident');
    }

}
