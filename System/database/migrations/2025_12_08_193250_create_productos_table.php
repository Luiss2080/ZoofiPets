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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias_productos')->onDelete('cascade');
            $table->string('codigo_barras', 50)->unique()->nullable();
            $table->string('codigo_interno', 50)->unique();
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->string('marca', 100)->nullable();
            $table->string('presentacion', 50)->nullable(); // Ej: 500ml, 1kg, caja de 10 unidades
            $table->decimal('precio_compra', 10, 2)->default(0);
            $table->decimal('precio_venta', 10, 2);
            $table->decimal('margen_ganancia', 5, 2)->nullable(); // Porcentaje
            $table->integer('stock_actual')->default(0);
            $table->integer('stock_minimo')->default(1);
            $table->integer('stock_maximo')->default(100);
            $table->string('ubicacion_bodega', 50)->nullable(); // Pasillo, estante, etc.
            $table->boolean('requiere_receta')->default(false);
            $table->boolean('requiere_refrigeracion')->default(false);
            $table->boolean('controlado')->default(false); // Medicamento controlado
            $table->text('indicaciones')->nullable();
            $table->text('contraindicaciones')->nullable();
            $table->string('unidad_medida', 20)->default('Unidad'); // Unidad, Kg, Litro, etc.
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->index(['categoria_id', 'activo']);
            $table->index(['codigo_interno']);
            $table->index(['codigo_barras']);
            $table->index(['stock_actual', 'stock_minimo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
