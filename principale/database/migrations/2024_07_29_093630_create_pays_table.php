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
        Schema::create('pays', function (Blueprint $table) {
            $table->uuid('id_pays')->primary();
            $table->text('nom_url');
            $table->text('nom_normale');
            $table->text('code_pays');

            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id_utilisateur')->on('utilisateurs');
            
            $table->enum('statut_pays', ['actif', 'inactif'])->default('inactif');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
