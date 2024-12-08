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
        Schema::create('membres_sociprodd', function (Blueprint $table) {
            
            $table->uuid('id_membre_sociprodd')->primary();

            $table->text('nom');
            $table->text('prenom');
            $table->text('email');
            $table->text('whatsapp');
            $table->text('numeros_piece_identite');
            $table->text('matricule_sociprodd')->nullable();
            $table->text('nom_dossier');
            $table->text('lien_dossier');
            $table->text('nom_certificat')->nullable();
            $table->text('lien_certificat')->nullable();
            $table->enum('type_piece_identite', ['passeport', 'cni']);

            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');

            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            $table->enum('statut_membre_sociprodd', ['en attente', 'invalide', 'valide'])->default('en attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres_sociprodd');
    }
};
