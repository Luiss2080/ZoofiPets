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
        Schema::create('registro_vacunas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict');
            $table->foreignId('servicio_medico_id')->constrained('servicios_medicos')->onDelete('restrict');
            $table->string('vacuna', 150); // Nombre de la vacuna
            $table->string('laboratorio', 100)->nullable();
            $table->string('lote', 50)->nullable();
            $table->date('fecha_aplicacion');
            $table->date('proxima_dosis')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('via_administracion', 50)->nullable();
            $table->string('ubicacion_aplicacion', 100)->nullable();
            $table->boolean('recordatorio_enviado')->default(false);
            $table->boolean('reaccion_adversa')->default(false);
            $table->text('descripcion_reaccion')->nullable();
            $table->timestamps();
            
            $table->index(['mascota_id', 'fecha_aplicacion']);
            $table->index(['proxima_dosis']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_vacunas');
    }
};
