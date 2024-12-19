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
        Schema::create('elements', function (Blueprint $table) {
            $table->uuid('id_element')->primary();
            $table->text('reference_unique');
            $table->text('titre');
            $table->text('petite_description');
            $table->text('nom_photos')->nullable();
            $table->text('lien_photos')->nullable();
            $table->text('lien_video')->nullable();

            $table->enum('type_element', ['actualite', 'reportage', 'podcast', 'projet', 'mission']);
            
            $table->uuid('mission_id');
            $table->foreign('mission_id')->references('id_mission')->on('missions');

            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');
            
            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            $table->uuid('validateur_id')->nullable();

            $table->enum('statut_element', ['publier', 'en attente', 'supprimer'])->default('en attente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};
