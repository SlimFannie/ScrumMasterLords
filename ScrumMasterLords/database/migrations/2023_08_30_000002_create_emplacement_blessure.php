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
            $table->id()->autoIncrement()->primary();
            $table->string('tete_visage_nez_yeux_oreille')->nullable();
            $table->boolean('torse')->nullable();
            $table->boolean('poumon')->nullable();
            $table->string('bras_epaule_coude')->nullable();
            $table->string('poignet_main_doigt')->nullable();
            $table->string('dos')->nullable();
            $table->string('hanche')->nullable();
            $table->string('jambre')->nullable();
            $table->string('pied')->nullable();
            $table->string('autre_place')->nullable();
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
