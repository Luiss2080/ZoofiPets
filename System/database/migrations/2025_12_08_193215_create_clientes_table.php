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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 20)->unique()->nullable();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('telefono', 20)->nullable();
            $table->string('telefono_secundario', 20)->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->text('direccion')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['M', 'F', 'Otro'])->nullable();
            $table->string('contacto_emergencia', 100)->nullable();
            $table->string('telefono_emergencia', 20)->nullable();
            $table->text('notas')->nullable();
            $table->boolean('acepta_promociones')->default(true);
            $table->decimal('credito_disponible', 10, 2)->default(0);
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index(['cedula']);
            $table->index(['telefono']);
            $table->index(['activo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
