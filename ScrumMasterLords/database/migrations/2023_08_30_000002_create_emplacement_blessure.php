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
        Schema::create('emplacement_blessures', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->boolean('brulure_engelure')->nullable();
            $table->boolean('commotion_cerebrale')->nullable();
            $table->boolean('corps_etranger')->nullable();
            $table->boolean('coupure_laceration_dechirure')->nullable();
            $table->boolean('douleur_dos')->nullable();
            $table->boolean('egratignure_eraflure_piqure_echarde')->nullable();
            $table->boolean('entorse_elongation-contusion_foulure_luxation')->nullable();
            $table->boolean('fracture_amputation')->nullable();
            $table->string('irritation_infection')->nullable();
            $table->boolean('inhalation')->nullable();
            $table->string('autre_emplacement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplacement_blessures');
    }
};
