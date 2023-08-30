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
            $table->string('no_unite');
            $table->string('departement');
            $table->string('nom_complet_employer');
            $table->string('nom_complet_superieur');
            $table->string('no_permis_conduite_employer');
            $table->boolean('autre_vehicules_implique');
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
