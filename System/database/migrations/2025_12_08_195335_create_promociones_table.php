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
        Schema::create('promociones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->enum('tipo', ['Porcentaje', 'Monto_Fijo', 'Producto_Gratis', 'Servicio_Gratis']);
            $table->decimal('valor', 10, 2); // Porcentaje o monto
            $table->decimal('monto_minimo', 10, 2)->default(0); // Monto mínimo para aplicar
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('usos_maximos')->nullable(); // Límite de usos totales
            $table->integer('usos_por_cliente')->default(1); // Límite por cliente
            $table->boolean('aplica_productos')->default(true);
            $table->boolean('aplica_servicios')->default(true);
            $table->boolean('activa')->default(true);
            $table->timestamps();
            
            $table->index(['fecha_inicio', 'fecha_fin', 'activa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones');
    }
};
