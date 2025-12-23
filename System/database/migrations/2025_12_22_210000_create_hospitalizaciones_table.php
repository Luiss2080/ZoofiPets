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
        Schema::create('hospitalizaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Veterinario a cargo
            $table->string('motivo_ingreso');
            $table->datetime('fecha_ingreso');
            $table->datetime('fecha_alta_estimada')->nullable();
            $table->datetime('fecha_alta_real')->nullable();
            $table->enum('estado', ['Ingresado', 'Alta', 'Fallecido', 'Transferido'])->default('Ingresado');
            $table->string('jaula_habitacion', 50)->nullable();
            $table->decimal('costo_total', 10, 2)->default(0);
            $table->text('autorizados_visita')->nullable();
            $table->text('dieta_especial')->nullable();
            $table->text('tratamiento_actual')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->index(['mascota_id', 'estado']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitalizaciones');
    }
};
