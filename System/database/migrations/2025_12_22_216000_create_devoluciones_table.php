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
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas')->onDelete('cascade');
            $table->foreignId('autorizado_por')->constrained('empleados')->onDelete('restrict');
            $table->datetime('fecha_devolucion');
            $table->string('motivo', 200);
            $table->decimal('monto_reembolsado', 10, 2);
            $table->enum('estado', ['Pendiente', 'Aprobada', 'Rechazada'])->default('Pendiente');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        Schema::create('detalle_devoluciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('devolucion_id')->constrained('devoluciones')->onDelete('cascade');
            $table->foreignId('producto_id')->nullable()->constrained('productos')->onDelete('restrict');
            $table->integer('cantidad');
            $table->enum('condicion', ['Buen_Estado', 'Dañado', 'Defectuoso', 'Abierto'])->default('Buen_Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_devoluciones');
        Schema::dropIfExists('devoluciones');
    }
};
