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
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('fonction')->nullable();
            $table->string('secteur')->nullable();
            $table->date('date_observation')->nullable();
            $table->string('heure')->nullable();
            $table->string('lieu')->nullable();
            $table->string('temoin')->nullable();
            $table->text('description')->nullable(); /* posiblement avoir une table que pour cela */
            $table->text('correction_amelioration')->nullable(); /* posiblement avoir une table que pour cela */
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
        Schema::dropIfExists('formulaire_grille_audits');
    }
};
