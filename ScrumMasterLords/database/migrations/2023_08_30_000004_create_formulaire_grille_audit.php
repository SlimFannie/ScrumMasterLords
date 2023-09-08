<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulaire_grille_audits', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('nom_employer')->nullable();
            $table->string('lieux_travail')->nullable();
            $table->string('date')->nullable();
            $table->string('heure')->nullable();
            $table->string('epi_conforme')->nullable();
            $table->string('epi_non_conforme')->nullable();
            $table->string('epi_na')->nullable();
            $table->string('tenue_lieux_conforme')->nullable();
            $table->string('tenue_lieux_non_conforme')->nullable();
            $table->string('tenue_lieux_na')->nullable();
            $table->string('comportement_securitaire_conforme')->nullable();
            $table->string('comportement_securitaire_non_conforme')->nullable();
            $table->string('comportement_securitaire_na')->nullable();
            $table->string('signalisation_conforme')->nullable();
            $table->string('signalisation_non_conforme')->nullable();
            $table->string('signalisation_na')->nullable();
            $table->string('fiches_signaletique_conforme')->nullable();
            $table->string('fiches_signaletique_non_conforme')->nullable();
            $table->string('fiches_signaletique_na')->nullable();
            $table->string('travaux_excavation_conforme')->nullable();
            $table->string('travaux_excavation_non_conforme')->nullable();
            $table->string('travaux_excavation_na')->nullable();
            $table->string('espace_clos_conforme')->nullable();
            $table->string('espace_clos_non_conforme')->nullable();
            $table->string('espace_clos_na')->nullable();
            $table->string('methode_travail_conforme')->nullable();
            $table->string('methode_travail_non_conforme')->nullable();
            $table->string('methode_travail_na')->nullable();
            $table->string('autre')->nullable();
            $table->string('respect_distanciation_conforme')->nullable();
            $table->string('respect_distanciation_non_conforme')->nullable();
            $table->string('respect_distanciation_na')->nullable();
            $table->string('port_epi_conforme')->nullable();
            $table->string('port_epi_non_conforme')->nullable();
            $table->string('port_epi_na')->nullable();
            $table->string('respect_procedures_etablies_conforme')->nullable();
            $table->string('respect_procedures_etablies_non_conforme')->nullable();
            $table->string('respect_procedures_etablies_na')->nullable();
            $table->string('description')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId('matricule_superieur')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_grille_audits');
    }
};
