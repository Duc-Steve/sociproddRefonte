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
        
        Schema::create('logs', function (Blueprint $table) {
            $table->uuid('id_log')->primary();
            $table->text('action');
            $table->text('table_name');
            $table->text('record_id');
            $table->text('old_data');
            $table->text('new_data');
            $table->text('action_date');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
