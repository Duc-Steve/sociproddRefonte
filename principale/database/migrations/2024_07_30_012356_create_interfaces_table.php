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
        Schema::create('interfaces', function (Blueprint $table) {
            
            $table->uuid('id_interface')->primary();
            $table->text('video');
            $table->text('image_dynamique');
            $table->text('image_statique');
            $table->text('projet');
            $table->text('actualite');
            $table->text('podcast');
            $table->text('reportage');
            $table->text('membre_executif');
            $table->text('coordonnee');
            $table->text('contact');
            $table->text('newsletter');
            $table->text('commentaire');

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
        Schema::dropIfExists('interfaces');
    }
};
