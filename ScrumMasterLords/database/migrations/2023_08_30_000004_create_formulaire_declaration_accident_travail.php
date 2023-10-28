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
            $table->id()->autoIncrement();
            $table->string('nom_formulaire')->default('Accident de travail');
            $table->string('nom_employer');
            $table->string('fonction');
            $table->string('date_accident');
            $table->string('endroit');
            $table->string('secteur')->nullable();
            $table->string('nom_temoin1')->nullable(); 
            $table->string('nom_temoin2')->nullable(); /* fin header formulaire */
            $table->boolean('tete')->nullable()->default(0); /* premier champ emplacement de la bléssure */
            $table->boolean('visage')->nullable()->default(0);
            $table->boolean('nez')->nullable()->default(0);
            $table->boolean('yeux')->nullable()->default(0);
            $table->boolean('oeil_gauche')->nullable()->default(0);
            $table->boolean('oeil_droit')->nullable()->default(0);
            $table->boolean('oreilles')->nullable()->default(0);
            $table->boolean('oreille_gauche')->nullable()->default(0);
            $table->boolean('oreille_droite')->nullable()->default(0);
            $table->boolean('torse')->nullable()->default(0);
            $table->boolean('poumon')->nullable()->default(0);
            $table->boolean('bras')->nullable()->default(0);
            $table->boolean('bras_gauche')->nullable()->default(0);
            $table->boolean('bras_droite')->nullable()->default(0);
            $table->boolean('epaules')->nullable()->default(0);
            $table->boolean('epaule_gauche')->nullable()->default(0);
            $table->boolean('epaule_droite')->nullable()->default(0);
            $table->boolean('coudes')->nullable()->default(0);
            $table->boolean('coude_gauche')->nullable()->default(0);
            $table->boolean('coude_droite')->nullable()->default(0);
            $table->boolean('poignets')->nullable()->default(0);
            $table->boolean('poignet_gauche')->nullable()->default(0);
            $table->boolean('poignet_droite')->nullable()->default(0);
            $table->boolean('mains')->nullable()->default(0);
            $table->boolean('main_gauche')->nullable()->default(0);
            $table->boolean('main_droite')->nullable()->default(0);
            $table->boolean('doigt')->nullable()->default(0);
            $table->boolean('dos')->nullable()->default(0);
            $table->boolean('hanche')->nullable()->default(0);
            $table->boolean('jambes')->nullable()->default(0);
            $table->boolean('jambe_gauche')->nullable()->default(0);
            $table->boolean('jambe_droite')->nullable()->default(0);
            $table->boolean('genoux')->nullable()->default(0);
            $table->boolean('genoux_gauche')->nullable()->default(0);
            $table->boolean('genoux_droite')->nullable()->default(0);
            $table->boolean('pieds')->nullable()->default(0);
            $table->boolean('pied_gauche')->nullable()->default(0);
            $table->boolean('pied_droite')->nullable()->default(0);
            $table->boolean('orteils')->nullable()->default(0);
            $table->boolean('chevilles')->nullable()->default(0);
            $table->boolean('cheville_gauche')->nullable()->default(0);
            $table->boolean('cheville_droite')->nullable()->default(0);/* dernier champ emplacement de la bléssure */
            $table->boolean('brulure')->nullable()->default(0);/* premier champ description de la bléssure */
            $table->boolean('engelure')->nullable()->default(0);
            $table->boolean('commotion_cerebrale')->nullable()->default(0);
            $table->boolean('corps_etranger')->nullable()->default(0);
            $table->boolean('coupure')->nullable()->default(0);
            $table->boolean('laceration')->nullable()->default(0);
            $table->boolean('dechirure')->nullable()->default(0);
            $table->boolean('douleur_dos')->nullable()->default(0);
            $table->boolean('egratignure')->nullable()->default(0);
            $table->boolean('eraflure')->nullable()->default(0);
            $table->boolean('piqure')->nullable()->default(0);
            $table->boolean('echarde')->nullable()->default(0);
            $table->boolean('entorse')->nullable()->default(0);
            $table->boolean('elongation')->nullable()->default(0);
            $table->boolean('contusion')->nullable()->default(0);
            $table->boolean('foulure')->nullable()->default(0);
            $table->boolean('luxation')->nullable()->default(0);
            $table->boolean('fracture')->nullable()->default(0);
            $table->boolean('amputation')->nullable()->default(0);
            $table->boolean('irritation')->nullable()->default(0);
            $table->boolean('infection')->nullable()->default(0);
            $table->boolean('inhalation')->nullable()->default(0);/* dernier champ description de la bléssure */
            $table->boolean('violence_physique')->nullable()->default(0); 
            $table->boolean('violence_verbale')->nullable()->default(0);
            $table->text('description')->nullable(); /* posiblement avoir une table que pour cela */
            $table->string('premiers_soins')->nullable();
            $table->string('nom_secouriste')->nullable();
            $table->boolean('accident_sans_absence')->nullable()->default(0);
            $table->boolean('accident_avec_consultation_medicale')->nullable()->default(0);
            $table->boolean('avis_superieur')->nullable()->default(0);
            $table->string('nom_superieur')->nullable();
            $table->string('date_avis')->nullable();
            $table->string('signature_superieur')->nullable();
            $table->foreignId('matricule_superieur')->nullable();
            $table->string('no_poste_superieur')->nullable();
            $table->string('date_signature_superieur')->nullable();
            $table->string('signature_employer')->nullable();
            $table->foreignId('matricule_usager')->nullable();
            $table->string('date_signature_employer')->nullable();
            $table->string('etat')->nullable();
            $table->foreignId('matricule_creation')->nullable();
            $table->string('created_at')->nullable();
            $table->foreignId('matricule_dernier_modificateur')->nullable();
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_declaration_accident_travails');
    }
};
