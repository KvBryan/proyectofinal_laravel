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
            $table->id('codigo');
            $table->string('nombre', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('valor', 15, 2);
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')->references('codigo')->on('categorias');
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
