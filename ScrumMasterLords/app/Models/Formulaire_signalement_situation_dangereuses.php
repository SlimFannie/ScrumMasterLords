<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire_signalement_situation_dangereuses extends Model
{
    use HasFactory;
    
    Protected $fillable = [
        'nom','prenom','fonction','secteur','date_observation','lieu','temoin','description','correction_amelioration',
        'nom_superieur','date_avis'
    ];
}
