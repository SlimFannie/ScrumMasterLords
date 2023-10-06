<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagersSeeder extends Seeder
{

    

    /**
     * Run the database seeds.
     * 
     *      $table->id()->autoIncrement();
        *   $table->Integer('matricule');
        *   $table->string('nom');
        *   $table->string('prenom');
        *   $table->string('image')->nullable();
            *$table->string('courriel');
            *$table->string('mdp');
            *$table->string('departement')->nullable();
            *$table->boolean('admin')->default(false);
            *$table->Integer('matricule_superieur')->nullable();
            *$table->string('date-creation');
     */
    public function run(): void
    {

        DB::table('usagers')->insert([
            [
            'matricule' => 1000001,
            'nom' => 'Pépin',
            'prenom' => 'Marc',
            'courriel' => 'pepin.marc@v3r.com',
            'mdp' => 'password',
            'departement' => 2,
            'matricule_superieur' => 1000004, 
            'supp' => false,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000002,
            'nom' => 'Reid',
            'prenom' => 'Claudine',
            'courriel' => 'reid.claudine@v3r.com',
            'mdp' => 'password',
            'departement' => 2,
            'matricule_superieur' => 1000004, 
            'supp' => false,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000003,
            'nom' => 'Temps',
            'prenom' => 'Paul',
            'courriel' => 'temps.paul@v3r.com',
            'mdp' => 'password',
            'departement' => 2,
            'matricule_superieur' => 1000004, 
            'supp' => false,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000004,
            'nom' => 'Dow',
            'prenom' => 'Jane',
            'courriel' => 'dow.jane@v3r.com',
            'mdp' => 'password',
            'departement' => 2,
            'matricule_superieur' => 1000005, 
            'supp' => true,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000005,
            'nom' => 'Morinville',
            'prenom' => 'Jonathan',
            'courriel' => 'morinville.jonathan@v3r.com',
            'mdp' => 'password',
            'departement' => 1,
            'matricule_superieur' => 1000006, 
            'supp' => true,
            'admin' => true,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000006,
            'nom' => 'Lizotte',
            'prenom' => 'Alain',
            'courriel' => 'lizotte.alain@v3r.com',
            'mdp' => 'password',
            'departement' => 1,
            'matricule_superieur' => null, 
            'supp' => true,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000007,
            'nom' => 'Levesque',
            'prenom' => 'Michèle',
            'courriel' => 'levesque.michele@v3r.com',
            'mdp' => 'password',
            'departement' => 6,
            'matricule_superieur' => 1000008, 
            'supp' => false,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000008,
            'nom' => 'St-Laurent',
            'prenom' => 'Josée',
            'courriel' => 'stlaurent.josee@v3r.com',
            'mdp' => 'password',
            'departement' => 6,
            'matricule_superieur' => 1000009, 
            'supp' => true,
            'admin' => true,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
        [
            'matricule' => 1000009,
            'nom' => 'Belisle',
            'prenom' => 'Claude',
            'courriel' => 'belisle.claude@v3r.com',
            'mdp' => 'password',
            'departement' => 6,
            'matricule_superieur' => null, 
            'supp' => true,
            'admin' => false,
            'date_creation' => date("Y-m-d H-i-s"),
        ],
    ]);
        
    }
}
