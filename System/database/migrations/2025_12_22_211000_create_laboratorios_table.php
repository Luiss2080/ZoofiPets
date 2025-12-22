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
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('historial_medico_id')->nullable()->constrained('historiales_medicos')->onDelete('set null');
            $table->foreignId('empleado_id')->nullable()->constrained('empleados')->onDelete('set null'); // Quien procesa
            $table->enum('tipo_examen', ['Hemograma', 'Bioquimica', 'Urianalisis', 'Coproparasitoscopico', 'Rayos_X', 'Ecografia', 'Citologia', 'Biopsia', 'Otro']);
            $table->date('fecha_solicitud');
            $table->date('fecha_resultado')->nullable();
            $table->text('resultados_texto')->nullable();
            $table->string('archivo_resultados')->nullable(); // Path to file
            $table->boolean('laboratorio_externo')->default(false);
            $table->string('nombre_laboratorio_externo', 150)->nullable();
            $table->enum('estado', ['Pendiente', 'En_Proceso', 'Completado', 'Cancelado'])->default('Pendiente');
            $table->decimal('costo', 10, 2)->nullable();
            $table->text('notas')->nullable();
            $table->timestamps();

            $table->index(['mascota_id', 'tipo_examen']);
            $table->index(['fecha_solicitud']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratorios');
    }
};
