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
        Schema::create('interacciones_clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Who handled it
            $table->enum('tipo', ['Llamada', 'Visita', 'Mensaje', 'Correo', 'Queja', 'Sugerencia']);
            $table->datetime('fecha_interaccion');
            $table->string('motivo', 150);
            $table->text('detalle')->nullable();
            $table->text('resultado')->nullable(); // e.g., "Agendo cita", "Resolvio duda"
            $table->enum('estado', ['Abierto', 'Cerrado', 'En_Seguimiento'])->default('Cerrado');
            $table->timestamps();

            $table->index(['cliente_id', 'fecha_interaccion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interacciones_clientes');
    }
};
