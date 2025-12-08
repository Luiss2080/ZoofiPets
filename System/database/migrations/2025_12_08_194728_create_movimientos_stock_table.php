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
        Schema::create('movimientos_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict'); // Quien registra el movimiento
            $table->foreignId('venta_id')->nullable()->constrained('ventas')->onDelete('set null'); // Si es por venta
            $table->enum('tipo_movimiento', ['Entrada', 'Salida', 'Ajuste', 'Vencimiento', 'Devolucion']);
            $table->integer('cantidad'); // Positivo para entrada, negativo para salida
            $table->integer('stock_anterior');
            $table->integer('stock_nuevo');
            $table->decimal('precio_unitario', 10, 2)->nullable(); // Para entradas
            $table->string('motivo', 200)->nullable();
            $table->string('numero_factura_compra', 50)->nullable(); // Para entradas
            $table->string('lote', 50)->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
            
            $table->index(['producto_id', 'created_at']);
            $table->index(['tipo_movimiento', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos_stock');
    }
};
