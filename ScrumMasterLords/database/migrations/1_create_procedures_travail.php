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
        Schema::create('procedure_travails', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titre')->nullable();
            $table->string('lien')->nullable();
            $table->string('departement')->nullable();
            $table->string('sous_departement')->nullable();
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
        Schema::dropIfExists('procedure_travails');
    }
};
