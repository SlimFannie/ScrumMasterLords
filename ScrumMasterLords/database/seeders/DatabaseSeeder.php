<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        //données de tests

        $this->call(AtelierMecaniqueRapportAccidentTableSeeder::class);
        $this->call(DeclarationAccidentsTableSeeder::class);
        $this->call(GrilleAuditTableSeeder::class);
        $this->call(ProceduresTravailTableseeder::class);
        $this->call(SignalementTituationDangereuseActeViolenceTableSeeder::class);
        $this->call(UsagersSeeder::class);

    }
}
