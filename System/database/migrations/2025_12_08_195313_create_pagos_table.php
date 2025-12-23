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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas')->onDelete('cascade');
            $table->foreignId('metodo_pago_id')->constrained('metodos_pago')->onDelete('restrict');
            $table->decimal('monto', 12, 2);
            $table->string('referencia', 100)->nullable();
            $table->string('referencia_transaccion', 100)->nullable();
            $table->string('comprobante_bancario', 150)->nullable(); // Path to file
            $table->string('moneda', 10)->default('USD');
            $table->enum('tipo_comprobante', ['Recibo', 'Factura', 'Ticket'])->default('Ticket');
            $table->decimal('comision', 10, 2)->default(0);
            $table->text('observaciones')->nullable();
            $table->timestamps();
            
            $table->index(['venta_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
