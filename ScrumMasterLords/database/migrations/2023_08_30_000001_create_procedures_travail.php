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
        Schema::create('precedure_travails', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('titre')->nullable();
            $table->string('lien')->nullable();
            $table->string('departement')->nullable();
            $table->string('sous_departement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precedure_travails');
    }
};
