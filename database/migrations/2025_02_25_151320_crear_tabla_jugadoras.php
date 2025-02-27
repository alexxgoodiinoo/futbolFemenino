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
        Schema::create('jugadoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('posicion');
            $table->string('foto')->nullable();
            $table->foreignId('equipos_id')->constrained(
                table: 'equipos', indexName: 'jugadora_equipoId'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadoras');
    }
};
