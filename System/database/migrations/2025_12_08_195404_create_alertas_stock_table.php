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
        Schema::create('alertas_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->enum('tipo_alerta', ['Stock_Minimo', 'Stock_Agotado', 'Proximo_Vencimiento', 'Vencido']);
            $table->integer('stock_actual')->nullable();
            $table->integer('stock_minimo')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->boolean('notificado')->default(false);
            $table->timestamp('fecha_notificacion')->nullable();
            $table->boolean('resuelto')->default(false);
            $table->timestamp('fecha_resolucion')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
            
            $table->index(['tipo_alerta', 'notificado']);
            $table->index(['resuelto', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertas_stock');
    }
};
