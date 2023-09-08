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
        Schema::create('formulaire_declaration_accident_travails', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('nom_employer')->nullable();
            $table->string('fonction')->nullable();
            $table->date('date_accident')->nullable(); 
            $table->string('heure')->nullable();
            $table->boolean('temoin')->nullable();
            $table->string('nom_temoins')->nullable(); /* fin header formulaire */
            $table->boolean('tete')->nullable(); /* premier champ emplacement de la bléssure */
            $table->boolean('visage')->nullable();
            $table->boolean('nez')->nullable();
            $table->boolean('yeux')->nullable();
            $table->boolean('oreille')->nullable();
            $table->boolean('torse')->nullable();
            $table->boolean('poumon')->nullable();
            $table->boolean('bras')->nullable();
            $table->boolean('epaule')->nullable();
            $table->boolean('coude')->nullable();
            $table->boolean('poignet')->nullable();
            $table->boolean('main')->nullable();
            $table->boolean('doigt')->nullable();
            $table->boolean('dos')->nullable();
            $table->boolean('hanche')->nullable();
            $table->boolean('jambre')->nullable();
            $table->boolean('pied')->nullable();
            $table->string('autre_place')->nullable(); /* dernier champ emplacement de la bléssure */
            $table->boolean('brulure')->nullable();/* premier champ description de la bléssure */
            $table->boolean('engelure')->nullable();
            $table->boolean('commotion_cerebrale')->nullable();
            $table->boolean('corps_etranger')->nullable();
            $table->boolean('coupure')->nullable();
            $table->boolean('laceration')->nullable();
            $table->boolean('dechirure')->nullable();
            $table->boolean('douleur_dos')->nullable();
            $table->boolean('egratignure')->nullable();
            $table->boolean('eraflure')->nullable();
            $table->boolean('piqure')->nullable();
            $table->boolean('echarde')->nullable();
            $table->boolean('entorse')->nullable();
            $table->boolean('elongation')->nullable();
            $table->boolean('contusion')->nullable();
            $table->boolean('foulure')->nullable();
            $table->boolean('luxation')->nullable();
            $table->boolean('fracture')->nullable();
            $table->boolean('amputation')->nullable();
            $table->boolean('irritation')->nullable();
            $table->boolean('infection')->nullable();
            $table->boolean('inhalation')->nullable();/* dernier champ description de la bléssure */
            $table->boolean('violence_physique')->nullable(); 
            $table->boolean('violence_verbale')->nullable();
            $table->text('description')->nullable(); /* posiblement avoir une table que pour cela */
            $table->string('premirs soins')->nullable();
            $table->string('nom du secouriste')->nullable();
            $table->boolean('accident_sans_absence')->nullable();
            $table->boolean('accident_avec_consultation_medical')->nullable();
            $table->boolean('avis_superieur')->nullable();
            $table->string('nom_superieur')->nullable();
            $table->string('date_avis')->nullable();
            $table->string('signature_superieur')->nullable();
            $table->string('no_poste_superieur')->nullable();
            $table->string('date_signature_superieur')->nullable();
            $table->string('signatue_employer')->nullable();
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
        Schema::dropIfExists('formulaire_declaration_situation_dangereuses');
    }
};
