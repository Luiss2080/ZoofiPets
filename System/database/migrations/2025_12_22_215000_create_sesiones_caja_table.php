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
        Schema::create('sesiones_caja', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('restrict');
            $table->datetime('fecha_apertura');
            $table->datetime('fecha_cierre')->nullable();
            $table->decimal('monto_inicial', 10, 2);
            $table->decimal('monto_final', 10, 2)->nullable();
            $table->decimal('diferencia', 10, 2)->default(0); // Surplus or shortage
            $table->enum('estado', ['Abierta', 'Cerrada', 'Arqueo'])->default('Abierta');
            $table->text('notas')->nullable();
            $table->timestamps();
        });

        // Add the Foreign Key constraint to ventas table now that sesiones_caja exists
        Schema::table('ventas', function (Blueprint $table) {
            $table->foreign('sesion_caja_id')->references('id')->on('sesiones_caja')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropForeign(['sesion_caja_id']);
        });
        Schema::dropIfExists('sesiones_caja');
    }
};
