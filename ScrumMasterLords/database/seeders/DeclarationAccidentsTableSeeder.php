<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DeclarationAccidentsTableSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formulaire_declaration_accident_travails')->insert([
            [
                'nom_formulaire' => 'formulaire de déclaration de travail',
                'nom_employer' => 'Julio Deschelle',
                'date_accident' => '2023-09-19',
                'tete' => true,
                'brulure' => true,
                'accident_sans_absence' => false,
                'accident_avec_consultation_medical' => true,
                'avis_superieur' => true,
                'matricule_usager' => 1000004,
                'matricule_superieur' => 1000002,
            ],
            [
                'nom_formulaire' => 'formulaire de déclaration de travail',
                'nom_employer' => 'Julio Deschelle',
                'date_accident' => '2023-08-21',
                'tete' => true,
                'brulure' => true,
                'accident_sans_absence' => false,
                'accident_avec_consultation_medical' => true,
                'avis_superieur' => true,
                'matricule_usager' => 1000004,
                'matricule_superieur' => 1000002,
            ],
            [
                'nom_formulaire' => 'formulaire de déclaration de travail',
                'nom_employer' => 'Orin Winsor',
                'date_accident' => '2023-08-29',
                'tete' => true,
                'brulure' => true,
                'accident_sans_absence' => false,
                'accident_avec_consultation_medical' => true,
                'avis_superieur' => true,
                'matricule_usager' => 1000005,
                'matricule_superieur' => 1000007,
            ],
        ]);
    }
}
