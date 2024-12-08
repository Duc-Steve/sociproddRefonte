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
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            // Change le type de données de la colonne `tokenable_id`
            // Remplacez 'nouveau_type' par le type de données souhaité (ex. `uuid()`)
            $table->uuid('tokenable_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            //
            // Revenir à l'ancien type de données de la colonne `tokenable_id`
            $table->bigInteger('tokenable_id')->change();
        });
    }
};
