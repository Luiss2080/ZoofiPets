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
        Schema::create('historiales_medicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Veterinario
            $table->foreignId('cita_medica_id')->nullable()->constrained('citas_medicas')->onDelete('set null');
            $table->datetime('fecha_consulta');
            $table->decimal('peso', 5, 2)->nullable();
            $table->decimal('temperatura', 4, 1)->nullable();
            $table->text('sintomas')->nullable();
            $table->decimal('peso_salida', 5, 2)->nullable();
            $table->decimal('temperatura_salida', 4, 1)->nullable();
            $table->text('diagnostico');
            $table->text('tratamiento')->nullable();
            $table->text('medicamentos')->nullable();
            $table->text('examenes_realizados')->nullable();
            $table->text('recomendaciones')->nullable();
            $table->date('proxima_cita')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales_medicos');
    }
};
