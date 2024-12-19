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
        Schema::create('missions', function (Blueprint $table) {
            $table->uuid('id_mission')->primary();
            $table->text('nom_mission');
            
            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');

            $table->enum('statut_mission', ['activer', 'desactiver'])->default('activer');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
