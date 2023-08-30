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
            $table->string('nom_eployer');
            $table->string('fonction');
            $table->date('date_accident'); 
            $table->string('heure');
            $table->boolean('temoin');
            $table->string('nom_temoins')->nullable();
            $table->string('violence');
            $table->text('description'); /* posiblement avoir une table que pour cela */
            $table->boolean('accident_sans_absence');
            $table->boolean('accident_avec_consultation_medical');
            $table->boolean('avis_superieur');
            $table->string('nom_superieur')->nullable();
            $table->string('date_avis')->nullable();
            $table->string('signature_superieur')->nullable();
            $table->string('no_poste_superieur')->nullable();
            $table->string('date_signature_superieur')->nullable();
            $table->string('employer')->nullable();
            $table->string('no_poste_employer')->nullable();
            $table->string('date_signature_employer')->nullable();
            $table->string('etat');
            $table->foreignId('user_matricule');
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
