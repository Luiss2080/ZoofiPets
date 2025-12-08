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
            $table->string('numero_cita', 20)->unique();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Veterinario
            $table->foreignId('servicio_medico_id')->constrained('servicios_medicos')->onDelete('restrict');
            $table->datetime('fecha_hora');
            $table->integer('duracion_minutos')->default(30);
            $table->enum('estado', ['Programada', 'Confirmada', 'En_Proceso', 'Completada', 'Cancelada', 'No_Asistio'])->default('Programada');
            $table->enum('prioridad', ['Baja', 'Normal', 'Alta', 'Urgente'])->default('Normal');
            $table->text('motivo_consulta')->nullable();
            $table->text('sintomas_observados')->nullable();
            $table->decimal('precio_estimado', 10, 2)->nullable();
            $table->decimal('precio_final', 10, 2)->nullable(); // Puede diferir del precio base del servicio
            $table->text('observaciones')->nullable();
            $table->text('recomendaciones')->nullable();
            $table->datetime('fecha_reprogramacion')->nullable();
            $table->text('motivo_cancelacion')->nullable();
            $table->timestamps();
            
            $table->index(['fecha_hora', 'empleado_id']);
            $table->index(['cliente_id', 'fecha_hora']);
            $table->index(['mascota_id', 'fecha_hora']);
            $table->index(['estado', 'fecha_hora']);
            $table->index(['numero_cita']);
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
