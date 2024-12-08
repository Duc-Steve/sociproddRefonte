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
        Schema::create('commentaires', function (Blueprint $table) {
            
            $table->uuid('id_commentaire')->primary();

            $table->text('nom_prenom');
            $table->text('adresse_mail');
            $table->text('description');

            $table->uuid('element_id');
            $table->foreign('element_id')->references('id_element')->on('elements');

            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');

            $table->uuid('utilisateur_id')->nullable();
            
            $table->enum('statut_commentaire', ['publier', 'supprimer', 'en attente'])->default('en attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
