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
        Schema::create('metodos_pago', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50); // Efectivo, Tarjeta Débito, Tarjeta Crédito, etc.
            $table->text('descripcion')->nullable();
            $table->boolean('requiere_referencia')->default(false); // Si requiere número de transacción
            $table->decimal('comision_porcentaje', 5, 2)->default(0); // Comisión del método
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metodos_pago');
    }
};
