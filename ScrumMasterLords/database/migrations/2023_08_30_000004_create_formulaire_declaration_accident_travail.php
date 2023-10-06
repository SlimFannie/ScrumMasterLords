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
            $table->boolean('tete')->nullable()->default(false); /* premier champ emplacement de la bléssure */
            $table->boolean('visage')->nullable()->default(false);
            $table->boolean('nez')->nullable()->default(false);
            $table->boolean('oeil_gauche')->nullable()->default(false);
            $table->boolean('oeil_droit')->nullable()->default(false);
            $table->boolean('oreille_gauche')->nullable()->default(false);
            $table->boolean('oreille_droite')->nullable()->default(false);
            $table->boolean('torse')->nullable()->default(false);
            $table->boolean('poumon')->nullable()->default(false);
            $table->boolean('bras_gauche')->nullable()->default(false);
            $table->boolean('bras_droite')->nullable()->default(false);
            $table->boolean('epaule_gauche')->nullable()->default(false);
            $table->boolean('epaule_droite')->nullable()->default(false);
            $table->boolean('coude_gauche')->nullable()->default(false);
            $table->boolean('coude_droite')->nullable()->default(false);
            $table->boolean('poignet_gauche')->nullable()->default(false);
            $table->boolean('poignet_droite')->nullable()->default(false);
            $table->boolean('main_gauche')->nullable()->default(false);
            $table->boolean('main_droite')->nullable()->default(false);
            $table->boolean('doigt')->nullable()->default(false);
            $table->boolean('dos')->nullable()->default(false);
            $table->boolean('hanche')->nullable()->default(false);
            $table->boolean('jambe_gauche')->nullable()->default(false);
            $table->boolean('jambe_droite')->nullable()->default(false);
            $table->boolean('genoux_gauche')->nullable()->default(false);
            $table->boolean('genoux_droite')->nullable()->default(false);
            $table->boolean('pied_gauche')->nullable()->default(false);
            $table->boolean('pied_droite')->nullable()->default(false);
            $table->boolean('orteils')->nullable()->default(false);
            $table->boolean('cheville_gauche')->nullable()->default(false);
            $table->boolean('cheville_droite')->nullable()->default(false);/* dernier champ emplacement de la bléssure */
            $table->boolean('brulure')->nullable()->default(false);/* premier champ description de la bléssure */
            $table->boolean('engelure')->nullable()->default(false);
            $table->boolean('commotion_cerebrale')->nullable()->default(false);
            $table->boolean('corps_etranger')->nullable()->default(false);
            $table->boolean('coupure')->nullable()->default(false);
            $table->boolean('laceration')->nullable()->default(false);
            $table->boolean('dechirure')->nullable()->default(false);
            $table->boolean('douleur_dos')->nullable()->default(false);
            $table->boolean('egratignure')->nullable()->default(false);
            $table->boolean('eraflure')->nullable()->default(false);
            $table->boolean('piqure')->nullable()->default(false);
            $table->boolean('echarde')->nullable()->default(false);
            $table->boolean('entorse')->nullable()->default(false);
            $table->boolean('elongation')->nullable()->default(false);
            $table->boolean('contusion')->nullable()->default(false);
            $table->boolean('foulure')->nullable()->default(false);
            $table->boolean('luxation')->nullable()->default(false);
            $table->boolean('fracture')->nullable()->default(false);
            $table->boolean('amputation')->nullable()->default(false);
            $table->boolean('irritation')->nullable()->default(false);
            $table->boolean('infection')->nullable()->default(false);
            $table->boolean('inhalation')->nullable()->default(false);/* dernier champ description de la bléssure */
            $table->boolean('violence_physique')->nullable()->default(false); 
            $table->boolean('violence_verbale')->nullable()->default(false);
            $table->text('description')->nullable(); /* possiblement avoir une table que pour cela */
            $table->string('premiers_soins')->nullable();
            $table->string('nom_secouriste')->nullable();
            $table->boolean('accident_sans_absence')->nullable()->default(false);
            $table->boolean('accident_avec_consultation_medicale')->nullable()->default(false);
            $table->boolean('avis_superieur')->nullable()->default(false);
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
            $table->string('date_creation')->nullable();
            $table->foreignId('matricule_dernier_modificateur')->nullable();
            $table->string('date_derniere_modification')->nullable();
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
