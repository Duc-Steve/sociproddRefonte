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
        Schema::create('profiles_membre_bureau_executifs', function (Blueprint $table) {

            $table->uuid('id_profile_membre_bureau_executif')->primary();
            
            $table->text('nom_prenom');
            $table->string('email')->unique();
            $table->text('nom_photo');
            $table->text('lien_photo');
            $table->text('poste');
            $table->text('petit_message')->nullable();

            $table->text('url_facebook');
            $table->text('url_twitter');
            $table->text('url_portefolio');
            $table->text('url_linkedin');
            
            
            $table->string('token_gestion', 64)->unique();

            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');

            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            $table->enum('statut_profile_membre_bureau_executif', ['publier', 'en attente', 'supprimer'])->default('en attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles_membre_bureau_executifs');
    }
};
