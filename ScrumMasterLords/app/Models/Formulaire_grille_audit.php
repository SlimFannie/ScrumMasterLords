<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire_grille_audit extends Model
{
    use HasFactory;

    Protected $fillable = [
        'nom_employer', 'lieux_travail', 'date', 'epi_conforme', 'epi_non_conforme',
        'epi_na', 'tenue_lieux_conforme', 'tenue_lieux_non_conforme', 'tenue_lieux_na', 'comportement_securitaire_conforme',
        'comportement_securitaire_non_conforme', 'comportement_securitaire_na', 'signalisation_conforme', 'signalisation_non_conforme', 'signalisation_na',
        'fiches_signaletique_conforme', 'fiches_signaletique_non_conforme', 'fiches_signaletique_na', 'travaux_excavation_conforme', 'travaux_excavation_non_conforme',
        'travaux_excavation_na', 'espace_clos_conforme', 'espace_clos_non_conforme', 'espace_clos_na', 'methode_travail_conforme', 
        'methode_travail_non_conforme', 'methode_travail_na', 'autre', 'autre_conforme', 'autre_non_conforme',
        'autre_na', 'respect_distanciation_conforme', 'respect_distanciation_non_conforme', 'respect_distanciation_na', 'port_epi_conforme',
        'port_epi_non_conforme', 'port_epi_na', 'respect_procedures_etablies_conforme', 'respect_procedures_etablies_non_conforme', 'respect_procedures_etablies_na',
        'description'
    ];
}
