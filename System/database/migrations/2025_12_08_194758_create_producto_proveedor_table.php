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
        Schema::create('producto_proveedor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');
            $table->decimal('precio_compra', 10, 2)->nullable();
            $table->integer('tiempo_entrega_dias')->nullable();
            $table->integer('cantidad_minima_pedido')->default(1);
            $table->boolean('proveedor_principal')->default(false);
            $table->text('notas')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
            
            $table->unique(['producto_id', 'proveedor_id']);
            $table->index(['proveedor_id', 'activo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_proveedor');
    }
};
