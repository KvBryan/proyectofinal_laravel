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
        Schema::create('depreciacion', function (Blueprint $table) {
            $table->id('id_depreciacion');
            $table->foreignId('activo')->constrained('activos', 'id_activo');
            $table->date('fecha_depreciacion');
            $table->decimal('valor_depreciado', 15, 2);
            $table->decimal('valor_residual', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depreciacion');
    }
};
