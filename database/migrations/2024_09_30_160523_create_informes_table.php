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
            $table->id('id_informe');
            $table->string('tipo_informe', 25);
            $table->date('fecha_generacion');
            $table->string('ruta_archivo', 255);
            $table->foreignId('activo')->constrained('activos', 'id_activo');
            $table->foreignId('depreciacion')->constrained('depreciacion', 'id_depreciacion');
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
