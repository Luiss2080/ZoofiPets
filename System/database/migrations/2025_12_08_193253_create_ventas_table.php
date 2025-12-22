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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura', 50)->unique();
            $table->foreignId('cliente_id')->nullable()->constrained('clientes')->onDelete('set null');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Vendedor/Cajero
            $table->unsignedBigInteger('sesion_caja_id')->nullable(); // Relacionado posteriormente en la migración de cajas
            $table->datetime('fecha_venta');
            $table->decimal('subtotal', 12, 2);
            $table->decimal('impuesto', 10, 2)->default(0);
            $table->decimal('descuento', 10, 2)->default(0);
            $table->decimal('total', 12, 2);
            $table->enum('estado', ['Pendiente', 'Pagada', 'Cancelada', 'Devuelta'])->default('Pendiente');
            $table->enum('tipo_venta', ['Contado', 'Credito', 'Mixto'])->default('Contado');
            $table->decimal('cambio', 10, 2)->default(0);
            $table->text('observaciones')->nullable();
            $table->timestamps();
            
            $table->index(['numero_factura']);
            $table->index(['cliente_id', 'fecha_venta']);
            $table->index(['empleado_id', 'fecha_venta']);
            $table->index(['estado', 'fecha_venta']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
