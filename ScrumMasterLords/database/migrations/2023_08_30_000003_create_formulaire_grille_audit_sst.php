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
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('secteur');
            $table->date('date_observation');
            $table->string('heure');
            $table->string('lieu');
            $table->string('temoin');
            $table->text('description'); /* posiblement avoir une table que pour cela */
            $table->text('correction_amelioration'); /* posiblement avoir une table que pour cela */
            $table->boolean('avis_superieur');
            $table->string('nom_superieur')->nullable();
            $table->string('date_avis')->nullable();
            $table->string('signature_superieur')->nullable();
            $table->string('no_poste_superieur');
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
