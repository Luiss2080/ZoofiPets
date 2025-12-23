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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade'); // NO NULLABLE - siempre debe tener dueño
            $table->string('codigo_mascota', 20)->unique(); // Código único de identificación
            $table->string('nombre', 100);
            $table->enum('especie', ['Perro', 'Gato', 'Ave', 'Roedor', 'Reptil', 'Pez', 'Otro']);
            $table->string('raza', 100)->nullable();
            $table->integer('edad_años')->nullable();
            $table->integer('edad_meses')->nullable();
            $table->decimal('peso', 5, 2)->nullable(); // peso en kg
            $table->enum('sexo', ['Macho', 'Hembra'])->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('color', 100)->nullable();
            $table->text('caracteristicas_especiales')->nullable();
            $table->boolean('esterilizado')->default(false);
            $table->date('fecha_esterilizacion')->nullable();
            $table->string('microchip', 50)->unique()->nullable();
            $table->text('alergias')->nullable();
            $table->text('condiciones_medicas')->nullable();
            $table->string('seguro_veterinario', 100)->nullable();
            $table->string('numero_poliza', 50)->nullable();
            $table->enum('temperamento', ['Docil', 'Agresivo', 'Nervioso', 'Tranquilo', 'Jugueton'])->nullable();
            $table->text('notas_comportamiento')->nullable();
            $table->string('dieta', 150)->nullable();
            $table->enum('estado_reproductivo', ['Castrado', 'Intacto', 'Gestante'])->default('Intacto');
            $table->enum('pelaje', ['Corto', 'Largo', 'Rizado', 'Sin Pelo', 'Doble Capa'])->nullable();
            $table->enum('origen', ['Adopcion', 'Compra', 'Rescate', 'Nacimiento_Casa'])->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index(['cliente_id', 'activo']);
            $table->index(['codigo_mascota']);
            $table->index(['especie', 'raza']);
            $table->index(['microchip']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
