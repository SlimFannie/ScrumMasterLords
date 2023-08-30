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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom_employer');
            $table->string('lieux_travail');
            $table->string('date');
            $table->string('heure');
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
            $table->string('etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
