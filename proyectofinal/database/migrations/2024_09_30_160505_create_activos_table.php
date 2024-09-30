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
        Schema::create('activos', function (Blueprint $table) {
            $table->id('id_activo');
            $table->string('nombre', 255);
            $table->text('descripcion')->nullable();
            $table->decimal('valor_inicial', 15, 2);
            $table->date('fecha_adquisicion');
            $table->foreignId('categoria')->constrained('categorias', 'id_categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
