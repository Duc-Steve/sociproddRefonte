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
        Schema::create('coordonnees', function (Blueprint $table) {
            $table->uuid('id_coordonnee')->primary();
            $table->text('telephone');
            $table->text('fixe');
            $table->text('adresse_mail');
            $table->text('longitude')->nullable();
            $table->text('latitude')->nullable();
            $table->text('localisation');
                
            $table->text('url_facebook')->nullable();
            $table->text('url_twitter')->nullable();
            $table->text('url_youtube')->nullable();
            $table->text('url_tiktok')->nullable();
            $table->text('url_linkedin')->nullable();
            $table->text('url_chaine_whatsapp')->nullable();
            $table->text('image_carte_pays');

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
        Schema::dropIfExists('coordonnees');
    }
};
