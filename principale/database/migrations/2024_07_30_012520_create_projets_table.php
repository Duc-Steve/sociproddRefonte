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
        Schema::create('projets', function (Blueprint $table) {
            $table->uuid('id_projet')->primary();
            $table->text('description');
            $table->text('nom_pdf');
            $table->text('lien_pdf');
            
            $table->enum('type_projet', ['humanitaire', 'sociale']);

            $table->uuid('element_id');
            $table->foreign('element_id')->references('id_element')->on('elements');

            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            
            $table->enum('statut_projet', ['en cours', 'terminer', 'en attente de financement']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};