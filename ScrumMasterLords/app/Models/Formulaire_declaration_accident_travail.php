<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire_declaration_accident_travail extends Model
{
    use HasFactory;

    Protected $fillable = [
        'nom_employer', 'fonction', 'date_accident', 'endroit', 'secteur',
        'nom_temoin1', 'nom_temoin2', 'tete', 'visage', 'nez', 
        'oeil_gauche', 'oeil_droit', 'oreille_gauche', 'oreille_droite', 'torse', 
        'poumon', 'bras_gauche', 'bras_droite', 'epaule_gauche', 'epaule_droite', 
        'coude_gauche', 'coude_droite', 'poignet_gauche', 'poignet_droite', 'main_gauche',
        'main_droite', 'doigt', 'dos', 'hanche', 'jambe_gauche', 
        'jambe_droite', 'genoux_gauche', 'genoux_droite', 'pied_gauche', 'pied_droite', 
        'orteils', 'cheville_gauche', 'cheville_droite', 'brulure', 'engelure', 
        'commotion_cerebrale', 'corps_etranger', 'coupure', 'laceration', 'dechirure', 
        'douleur_dos', 'egratignure', 'eraflure', 'piqure', 'echarde', 
        'entorse', 'elongation', 'contusion', 'foulure', 'luxation', 
        'fracture', 'amputation', 'irritation', 'infection', 'inhalation', 
        'violence_physique', 'violence_verbale', 'description', 'premiers_soins', 'nom_secouriste', 
        'accident_sans_absence', 'accident_avec_consultation_medicale', 'matricule_usager'
    ];

}
