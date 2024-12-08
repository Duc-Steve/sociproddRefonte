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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->uuid('id_utilisateur')->primary();
            $table->text('matricule');
            $table->text('nom_prenom');
            $table->text('pays')->nullable();
            $table->text('ville')->nullable();
            $table->text('adresse')->nullable();
            $table->text('sexe')->nullable();
            $table->text('email');
            $table->text('numeros')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('nom_dossier')->nullable();
            $table->text('lien_dossier')->nullable();
            $table->text('password');
            $table->text('date_password');
            $table->enum('type_utilisateur', ['administrateur', 'comite', 'representant']);
            $table->text('poste')->nullable();
            $table->uuid('pays_id')->nullable();
            $table->uuid('utilisateur_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->enum('etat_compte', ['actif', 'inactif', 'bannis'])->default('actif');
            
            $table->timestamps();
        });

        
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->uuid('id_password_reset_token')->primary();
            $table->text('adresse_email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
