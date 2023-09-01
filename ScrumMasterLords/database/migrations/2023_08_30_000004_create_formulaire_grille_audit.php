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
            $table->string('epi')->nullable();
            $table->string('tenue_lieux')->nullable();
            $table->string('comportement_securitaire')->nullable();
            $table->string('signalisation')->nullable();
            $table->string('fiches_signaletique')->nullable();
            $table->string('travaux_excavation')->nullable();
            $table->string('espace_clos')->nullable();
            $table->string('methode_travail')->nullable();
            $table->string('autre')->nullable();
            $table->string('respect_distanciation')->nullable();
            $table->string('port_epi')->nullable();
            $table->string('respect_procedures_etablies')->nullable();
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
