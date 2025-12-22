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
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('mascota_id')->nullable()->constrained('mascotas')->onDelete('cascade');
            $table->enum('tipo', ['Vacuna', 'Cita', 'Control', 'Cumpleaños', 'Desparasitacion', 'Pago', 'Otro']);
            $table->datetime('fecha_programada'); // When to send the reminder
            $table->enum('estado', ['Pendiente', 'Enviado', 'Fallido', 'Cancelado'])->default('Pendiente');
            $table->enum('medio', ['Email', 'SMS', 'WhatsApp', 'Llamada'])->default('WhatsApp');
            $table->text('mensaje')->nullable();
            $table->timestamps();

            $table->index(['fecha_programada', 'estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recordatorios');
    }
};
