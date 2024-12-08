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
        Schema::create('contacts', function (Blueprint $table) {
            
            $table->uuid('id_contact')->primary();
            $table->text('nom_prenom');
            $table->text('sujet');
            $table->text('adresse_mail');
            $table->text('message');
            $table->tinyInteger('vue')->default(0);

            $table->uuid('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays');
           
            $table->uuid('utilisateur_id')->nullable();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
