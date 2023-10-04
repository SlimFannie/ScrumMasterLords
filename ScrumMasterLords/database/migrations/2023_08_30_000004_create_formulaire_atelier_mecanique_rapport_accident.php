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
        Schema::create('formulaire_atelier_mecanique_rapport_accident', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom_formulaire')->default('formulaire accident atelier mecanique');
            $table->string('no_unite')->nullable();
            $table->string('departement')->nullable();
            $table->string('nom_complet_employer')->nullable(); // peut-être le changer en matricule_employer
            $table->string('nom_complet_superieur')->nullable(); // peut-être le changer en matricule_superieur
            $table->string('no_permis_conduite_employer')->nullable();
            $table->boolean('autre_vehicules_vrai')->default(0)->nullable();
            $table->boolean('autre_vehicules_faux')->default(0)->nullable();
            $table->string('etat')->nullable();
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
        Schema::dropIfExists('formulaire_atelier_mecanique_rapport_accident');
    }
};
