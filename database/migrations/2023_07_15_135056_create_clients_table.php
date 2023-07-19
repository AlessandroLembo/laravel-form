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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('codice')->unique()->default('/');
            $table->string('nome', 50)->unique()->default('/');
            $table->string('email', 50)->unique()->default('/');
            $table->string('telefono', 10)->unique()->default('/');
            $table->string('partita_iva', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
