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
            $table->id()->autoIncrement();
            $table->string('nom_formulaire')->default('grille d\'audit SST');
            $table->string('nom_employer')->nullable();
            $table->string('lieux_travail')->nullable();
            $table->string('date')->nullable();
            $table->boolean('heure')->nullable();
            $table->boolean('epi_conforme')->nullable()->default(0);
            $table->boolean('epi_non_conforme')->nullable()->default(0);
            $table->boolean('epi_na')->nullable()->default(0);
            $table->boolean('tenue_lieux_conforme')->nullable()->default(0);
            $table->boolean('tenue_lieux_non_conforme')->nullable()->default(0);
            $table->boolean('tenue_lieux_na')->nullable()->default(0);
            $table->boolean('comportement_securitaire_conforme')->nullable()->default(0);
            $table->boolean('comportement_securitaire_non_conforme')->nullable()->default(0);
            $table->boolean('comportement_securitaire_na')->nullable()->default(0);
            $table->boolean('signalisation_conforme')->nullable()->default(0);
            $table->boolean('signalisation_non_conforme')->nullable()->default(0);
            $table->boolean('signalisation_na')->nullable()->default(0);
            $table->boolean('fiches_signaletique_conforme')->nullable()->default(0);
            $table->boolean('fiches_signaletique_non_conforme')->nullable()->default(0);
            $table->boolean('fiches_signaletique_na')->nullable()->default(0);
            $table->boolean('travaux_excavation_conforme')->nullable()->default(0);
            $table->boolean('travaux_excavation_non_conforme')->nullable()->default(0);
            $table->boolean('travaux_excavation_na')->nullable()->default(0);
            $table->boolean('espace_clos_conforme')->nullable()->default(0);
            $table->boolean('espace_clos_non_conforme')->nullable()->default(0);
            $table->boolean('espace_clos_na')->nullable()->default(0);
            $table->boolean('methode_travail_conforme')->nullable()->default(0);
            $table->boolean('methode_travail_non_conforme')->nullable()->default(0);
            $table->boolean('methode_travail_na')->nullable()->default(0);
            $table->string('autre')->nullable();
            $table->boolean('respect_distanciation_conforme')->nullable()->default(0);
            $table->boolean('respect_distanciation_non_conforme')->nullable()->default(0);
            $table->boolean('respect_distanciation_na')->nullable()->default(0);
            $table->boolean('port_epi_conforme')->nullable()->default(0);
            $table->boolean('port_epi_non_conforme')->nullable()->default(0);
            $table->boolean('port_epi_na')->nullable()->default(0);
            $table->boolean('respect_procedures_etablies_conforme')->nullable()->default(0);
            $table->boolean('respect_procedures_etablies_non_conforme')->nullable()->default(0);
            $table->boolean('respect_procedures_etablies_na')->nullable()->default(0);
            $table->string('description')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId('matricule_superieur')->nullable();
            $table->string('matricule_creation')->nullable();
            $table->string('date-creation')->nullable();
            $table->string('matricule_dernier_modificateur')->nullable();
            $table->string('date_derniere_modification')->nullable();
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
