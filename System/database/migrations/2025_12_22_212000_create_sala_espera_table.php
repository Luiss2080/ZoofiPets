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
        Schema::create('sala_espera', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mascota_id')->constrained('mascotas')->onDelete('cascade');
            $table->foreignId('cita_id')->nullable()->constrained('citas_medicas')->onDelete('set null');
            $table->datetime('hora_llegada');
            $table->datetime('hora_atencion')->nullable();
            $table->enum('estado', ['Esperando', 'En_Consulta', 'Atendido', 'Ausente', 'Cancelado'])->default('Esperando');
            $table->integer('prioridad')->default(3); // 1 Alta, 5 Baja
            $table->text('motivo_visita')->nullable();
            $table->timestamps();

            $table->index(['mascota_id', 'estado']);
            $table->index(['hora_atencion']); // Corrected from fecha_atencion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala_espera');
    }
};
