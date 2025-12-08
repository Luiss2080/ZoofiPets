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
        // Ya no se necesita agregar campos porque la tabla clientes ya los tiene
        // integrados en su migración principal
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No hacer nada en rollback
    }
};
