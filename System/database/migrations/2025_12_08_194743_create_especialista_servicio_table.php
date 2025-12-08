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
        Schema::create('especialista_servicio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
            $table->foreignId('servicio_medico_id')->constrained('servicios_medicos')->onDelete('cascade');
            $table->boolean('principal')->default(false); // Si es el especialista principal para este servicio
            $table->text('notas')->nullable(); // Notas específicas sobre la especialización
            $table->timestamps();
            
            $table->unique(['empleado_id', 'servicio_medico_id']);
            $table->index(['servicio_medico_id', 'principal']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialista_servicio');
    }
};
