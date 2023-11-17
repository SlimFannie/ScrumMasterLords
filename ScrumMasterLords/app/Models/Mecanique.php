<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanique extends Model
{
    use HasFactory;

    Protected $fillable = [
        'no_unite', 'departement', 'nom_complet_employer', 'nom_complet_superieur', 'no_permis_conduite_employer',
        'autre_vehicules_vrai', 'autre_vehicules_faux'
    ];
}
