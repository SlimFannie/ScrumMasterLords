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
        Schema::create('formulaire_declaration_accidents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom_eployer')->nullable();
            $table->string('fonction')->nullable();
            $table->date('date_accident')->nullable(); 
            $table->string('heure')->nullable();
            $table->boolean('temoin')->nullable();
            $table->string('nom_temoins')->nullable();
            $table->string('violence')->nullable();
            $table->text('description')->nullable(); /* posiblement avoir une table que pour cela */
            $table->boolean('accident_sans_absence')->nullable();
            $table->boolean('accident_avec_consultation_medical')->nullable();
            $table->boolean('avis_superieur')->nullable();
            $table->string('nom_superieur')->nullable();
            $table->string('date_avis')->nullable();
            $table->string('signature_superieur')->nullable();
            $table->string('no_poste_superieur')->nullable();
            $table->string('date_signature_superieur')->nullable();
            $table->string('employer')->nullable();
            $table->string('no_poste_employer')->nullable();
            $table->string('date_signature_employer')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId('user_matricule')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_declaration_accidents');
    }
};
