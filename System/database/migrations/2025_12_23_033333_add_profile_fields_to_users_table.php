z<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('profesion')->nullable()->after('avatar');
            $table->string('nivel_estudios')->nullable()->after('profesion');
            $table->string('ci')->nullable()->after('nivel_estudios'); // Documento de Identidad
            $table->string('telefono')->nullable()->after('ci');
            $table->string('direccion')->nullable()->after('telefono');
            $table->date('fecha_nacimiento')->nullable()->after('direccion');
            $table->text('biografia')->nullable()->after('fecha_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'profesion',
                'nivel_estudios',
                'ci',
                'telefono',
                'direccion',
                'fecha_nacimiento',
                'biografia'
            ]);
        });
    }
};
