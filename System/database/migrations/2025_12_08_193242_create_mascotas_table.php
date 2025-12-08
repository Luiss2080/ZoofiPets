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
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
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
            $table->string('microchip', 50)->nullable();
            $table->text('alergias')->nullable();
            $table->text('condiciones_medicas')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
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
