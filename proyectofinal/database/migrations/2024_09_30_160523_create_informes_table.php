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
        Schema::create('informes', function (Blueprint $table) {
            $table->id('codigo');
            $table->foreignId('usuario_id')->constrained('usuarios', 'codigo');
            $table->text('contenido');
            $table->string('tipo', 50); // Tipo de informe, por ejemplo, "inventario" o "depreciación"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes');
    }
};
