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
        Schema::create('servicios_medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('duracion_estimada_minutos')->nullable();
            $table->enum('categoria', ['Consulta', 'Vacunacion', 'Cirugia', 'Tratamiento', 'Emergencia', 'Estetica', 'Diagnostico']);
            $table->text('requisitos_previos')->nullable();
            $table->string('codigo_servicio', 50)->unique()->nullable();
            $table->boolean('disponible_online')->default(false);
            $table->integer('garantia_dias')->default(0);
            $table->boolean('requiere_cita')->default(true);
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_medicos');
    }
};
