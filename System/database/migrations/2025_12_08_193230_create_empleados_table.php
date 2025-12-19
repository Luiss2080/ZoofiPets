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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_empleado', 20)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cedula', 20)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('telefono_emergencia', 20)->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->text('direccion')->nullable();
            // Relación con tabla cargos
            $table->foreignId('cargo_id')->constrained('cargos');
            //$table->enum('cargo', ['Veterinario', 'Asistente', 'Recepcionista', 'Administrador', 'Cajero', 'Gerente']);
            $table->string('especialidad', 100)->nullable(); // Solo para veterinarios
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['M', 'F', 'Otro'])->nullable();
            $table->string('numero_colegiado', 50)->nullable(); // Para veterinarios
            $table->enum('tipo_contrato', ['Fijo', 'Temporal', 'Practicante'])->default('Fijo');
            $table->text('notas')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index(['codigo_empleado']);
            $table->index(['cargo_id', 'activo']);
            $table->index(['cedula']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
