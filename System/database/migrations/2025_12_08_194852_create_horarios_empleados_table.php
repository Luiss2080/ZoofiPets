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
        Schema::create('horarios_empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
            $table->enum('dia_semana', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo']);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->time('descanso_inicio')->nullable();
            $table->time('descanso_fin')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->unique(['empleado_id', 'dia_semana']);
            $table->index(['empleado_id', 'activo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios_empleados');
    }
};
