<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagersSeeder extends Seeder
{

    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('usagers')->insert([
            [
            'matricule' => 1000001,
            'nom' => 'St-Laurent',
            'prenom' => 'Josée',
            'courriel' => 'adresseCourriel@courriel.com',
            'mdp' => 'password',
            'departement' => 'coordination SST',
            'matricule_superieur' => 1000001, 
            'admin' => true,
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000002,
            'nom' => 'Morinville',
            'prenom' => 'Jonathan',
            'courriel' => 'adresseCourriel2@courriel.com',
            'mdp' => 'password',
            'departement' => 'chef service projet',
            'matricule_superieur' => 1000002, 
            'admin' => true,
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000003,
            'nom' => 'Osgood',
            'prenom' => 'Gerok',
            'courriel' => 'ogerok0@newyorker.com',
            'mdp' => 'gO5/icFX#H>~v+mr',
            'departement' => 'Accounting',
            'admin' => false,
            'matricule_superieur' => 1000002, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000103,
            'nom' => 'Josepha',
            'prenom' => 'Kirkland',
            'courriel' => 'jkirkland1@over-blog.com',
            'mdp' => 'pC4{#r&Z',
            'departement' => 'Accounting',
            'admin' => false,
            'matricule_superieur' => 1000003, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000203,
            'nom' => 'Ham',
            'prenom' => 'Lamport',
            'courriel' => 'hlamport2@rambler.ru',
            'mdp' => 'cI4({HxI7wI=z!K#',
            'departement' => 'Accounting',
            'admin' => false,
            'matricule_superieur' => 1000003, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000004,
            'nom' => 'Julio',
            'prenom' => 'Deschelle',
            'courriel' => 'owinsor4@sciencedaily.com',
            'mdp' => 'cI4({HxI7wI=z!K#',
            'departement' => 'Ressource humaine',
            'admin' => false,
            'matricule_superieur' => 1000002, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000005,
            'nom' => 'Orin',
            'prenom' => 'Winsor',
            'courriel' => 'hlamport2@rambler.ru',
            'mdp' => 'cI4({HxI7wI=z!K#',
            'departement' => 'marketing',
            'admin' => false,
            'matricule_superieur' => 1000007, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000006,
            'nom' => 'Anastasia',
            'prenom' => 'Lamport',
            'courriel' => 'hlamport2@rambler.ru',
            'mdp' => 'cI4({HxI7wI=z!K#',
            'departement' => 'engineer',
            'admin' => false,
            'matricule_superieur' => 1000002, 
            'nbr_notif' => 0,  
        ],
        [
            'matricule' => 1000007,
            'nom' => 'Hattie',
            'prenom' => 'Lamport',
            'courriel' => 'hlamport2@rambler.ru',
            'mdp' => 'cI4({HxI7wI=z!K#',
            'departement' => 'marketing',
            'admin' => false,
            'matricule_superieur' => 1000002, 
            'nbr_notif' => 0,  
        ],
    ]);
        
    }
}
