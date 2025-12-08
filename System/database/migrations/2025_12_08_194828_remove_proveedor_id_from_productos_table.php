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
        // Ya no hay nada que eliminar porque la tabla productos fue corregida
        // La relación con proveedores ahora es muchos a muchos via producto_proveedor
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No hacer nada en rollback
    }
};
