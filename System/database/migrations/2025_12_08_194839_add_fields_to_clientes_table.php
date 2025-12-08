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
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('cedula', 20)->unique()->nullable();
            $table->string('telefono_secundario', 20)->nullable();
            $table->string('contacto_emergencia', 100)->nullable();
            $table->string('telefono_emergencia', 20)->nullable();
            $table->boolean('acepta_promociones')->default(true);
            $table->decimal('credito_disponible', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn([
                'cedula', 'telefono_secundario',
                'contacto_emergencia', 'telefono_emergencia',
                'acepta_promociones', 'credito_disponible'
            ]);
        });
    }
};
