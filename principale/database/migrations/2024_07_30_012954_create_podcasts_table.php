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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->uuid('id_podcast')->primary();
            $table->text('description')->nullable();
            $table->text('nom_audio');
            $table->text('lien_audio');

            $table->uuid('element_id');
            $table->foreign('element_id')->references('id_element')->on('elements');
          
            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            
            $table->enum('statut_podcast', ['publier', 'en attente', 'supprimer'])->default('en attente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcasts');
    }
};
