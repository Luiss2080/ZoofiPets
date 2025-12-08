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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura', 50)->unique();
            $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('restrict');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Quien registra la compra
            $table->date('fecha_compra');
            $table->date('fecha_recepcion')->nullable();
            $table->decimal('subtotal', 12, 2);
            $table->decimal('impuesto', 10, 2)->default(0);
            $table->decimal('descuento', 10, 2)->default(0);
            $table->decimal('total', 12, 2);
            $table->enum('estado', ['Pedido', 'En_Transito', 'Recibida', 'Cancelada'])->default('Pedido');
            $table->enum('metodo_pago', ['Efectivo', 'Transferencia', 'Cheque', 'Credito']);
            $table->text('observaciones')->nullable();
            $table->timestamps();
            
            $table->index(['proveedor_id', 'fecha_compra']);
            $table->index(['estado', 'fecha_compra']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
