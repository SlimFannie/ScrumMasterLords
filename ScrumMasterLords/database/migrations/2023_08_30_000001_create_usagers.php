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
            $table->Integer('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('image')->nullable();
            $table->string('courriel')->nullable();
            $table->string('mdp')->nullable();
            $table->string('departement')->nullable();
            $table->boolean('admin')->nullable()->default(false);
            $table->Integer('nbr_notif')->default(0)->nullable();
            $table->Integer('matricule_superieur')->nullable();
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
