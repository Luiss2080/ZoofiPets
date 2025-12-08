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
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cedula', 20)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->text('direccion')->nullable();
            $table->enum('cargo', ['Veterinario', 'Asistente', 'Recepcionista', 'Administrador', 'Cajero']);
            $table->string('especialidad', 100)->nullable(); // Solo para veterinarios
            $table->decimal('salario', 10, 2)->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['M', 'F', 'Otro'])->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
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
