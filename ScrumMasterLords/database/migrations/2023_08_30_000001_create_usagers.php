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
        Schema::create('usagers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->Integer('matricule')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('courriel');
            $table->string('mdp');
            $table->int('nbr_notif')->default(0);
            $table->Integer('matricule_superieur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
