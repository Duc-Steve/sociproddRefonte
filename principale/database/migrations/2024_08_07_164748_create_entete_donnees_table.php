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
        Schema::create('entete_donnees', function (Blueprint $table) {
            $table->uuid('id_entete_donnee')->primary();
            $table->text('phrase_un');
            $table->text('nom_image_dynamique_un');
            $table->text('lien_image_dynamique_un');
            $table->text('phrase_deux');
            $table->text('nom_image_dynamique_deux');
            $table->text('lien_image_dynamique_deux');
            $table->text('phrase_trois');
            $table->text('nom_image_dynamique_trois');
            $table->text('lien_image_dynamique_trois');
            $table->text('phrase_video');
            $table->text('nom_video');
            $table->text('lien_video');
            $table->text('phrase_statique');
            $table->text('nom_image_statique');
            $table->text('lien_image_statique');
            
            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');

            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entete_donnees');
    }
};
