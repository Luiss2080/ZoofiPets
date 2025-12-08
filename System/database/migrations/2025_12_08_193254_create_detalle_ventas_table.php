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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas')->onDelete('cascade');
            $table->foreignId('producto_id')->nullable()->constrained('productos')->onDelete('restrict');
            $table->foreignId('servicio_medico_id')->nullable()->constrained('servicios_medicos')->onDelete('restrict');
            $table->string('descripcion'); // Nombre del producto/servicio al momento de la venta
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();
            
            // Asegurar que al menos uno de producto_id o servicio_medico_id tenga valor
            $table->index(['venta_id', 'producto_id']);
            $table->index(['venta_id', 'servicio_medico_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
