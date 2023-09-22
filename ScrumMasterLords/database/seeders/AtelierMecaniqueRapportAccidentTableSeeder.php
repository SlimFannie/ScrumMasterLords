<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AtelierMecaniqueRapportAccidentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formulaire_atelier_mecanique_rapport_accident')->insert([
            [
                'nom_formulaire' => 'formulaire de déclaration accident mecanique',
                'no_unite' => 'unite4',
                'departement' => 'Police',
                'nom_complet_superieur' => 'Julio Deschelle',
                'no_permis_conduite_employer' => 'a1234-123456-12',
                'autre_vehicules_implique' => true,
            ],
            [
                'nom_formulaire' => 'formulaire de déclaration accident mecanique',
                'no_unite' => 'unite4',
                'departement' => 'Police',
                'nom_complet_superieur' => 'Julio Deschelle',
                'no_permis_conduite_employer' => 'a1234-123456-12',
                'autre_vehicules_implique' => true,
            ],
            [
                'nom_formulaire' => 'formulaire de déclaration accident mecanique',
                'no_unite' => 'unite4',
                'departement' => 'Police',
                'nom_complet_superieur' => 'Julio Deschelle',
                'no_permis_conduite_employer' => 'a1234-123456-12',
                'autre_vehicules_implique' => true,
            ],
        ]);
    }
}
