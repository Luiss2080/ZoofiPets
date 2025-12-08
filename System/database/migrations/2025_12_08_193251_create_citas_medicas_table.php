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
        Schema::create('citas_medicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Veterinario
            $table->foreignId('servicio_medico_id')->constrained('servicios_medicos')->onDelete('restrict');
            $table->datetime('fecha_hora');
            $table->enum('estado', ['Programada', 'En_Proceso', 'Completada', 'Cancelada', 'No_Asistio'])->default('Programada');
            $table->text('motivo_consulta')->nullable();
            $table->text('observaciones')->nullable();
            $table->decimal('precio_final', 10, 2)->nullable(); // Puede diferir del precio base del servicio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_medicas');
    }
};
