c<?php

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
        Schema::create('appareil_utilisateurs', function (Blueprint $table) {
            
            $table->uuid('id_appareil_utilisateur')->primary();
             
            $table->text('user_agent')->nullable();
            $table->json('systeme_exploitation')->nullable(); // Stocke les informations sur le système d'exploitation sous forme de JSON
            $table->json('navigateur')->nullable(); // Stocke les informations sur le navigateur sous forme de JSON
            $table->json('appareil')->nullable(); // Stocke les informations sur l'appareil sous forme de JSON
            
            $table->uuid('reseaux_utilisateur_id');
            $table->foreign('reseaux_utilisateur_id')->references('id_reseaux_utilisateur')->on('reseaux_utilisateurs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appareil_utilisateurs');
    }
};
