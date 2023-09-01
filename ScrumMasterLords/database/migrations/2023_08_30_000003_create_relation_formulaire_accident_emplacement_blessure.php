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
        Schema::create('formulaire_accidents_emplacement_blessures', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('id_formulaire')->nullable();
            $table->string('id_emplacement_blessure')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_accidents_emplacement_blessures');
    }
};
