<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodosPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('metodos_pago')->insert([
            ['nombre' => 'Efectivo', 'descripcion' => 'Pago en efectivo', 'requiere_referencia' => false, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tarjeta Débito', 'descripcion' => 'Pago con tarjeta de débito', 'requiere_referencia' => true, 'comision_porcentaje' => 1.5, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tarjeta Crédito Visa', 'descripcion' => 'Pago con tarjeta Visa', 'requiere_referencia' => true, 'comision_porcentaje' => 2.5, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tarjeta Crédito Mastercard', 'descripcion' => 'Pago con tarjeta Mastercard', 'requiere_referencia' => true, 'comision_porcentaje' => 2.5, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Transferencia Bancaria', 'descripcion' => 'Transferencia bancaria', 'requiere_referencia' => true, 'comision_porcentaje' => 0.8, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cheque', 'descripcion' => 'Pago con cheque', 'requiere_referencia' => true, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'PayPal', 'descripcion' => 'Pago mediante PayPal', 'requiere_referencia' => true, 'comision_porcentaje' => 3.4, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Bizum', 'descripcion' => 'Pago móvil Bizum', 'requiere_referencia' => true, 'comision_porcentaje' => 0.5, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Apple Pay', 'descripcion' => 'Pago con Apple Pay', 'requiere_referencia' => true, 'comision_porcentaje' => 2.9, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Google Pay', 'descripcion' => 'Pago con Google Pay', 'requiere_referencia' => true, 'comision_porcentaje' => 2.9, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cryptocurrencias', 'descripcion' => 'Pago con Bitcoin u otras cryptos', 'requiere_referencia' => true, 'comision_porcentaje' => 1.0, 'activo' => false, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vale Regalo', 'descripcion' => 'Canje de vale regalo', 'requiere_referencia' => true, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Crédito Tienda', 'descripcion' => 'Uso de crédito disponible del cliente', 'requiere_referencia' => false, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Débito Automático', 'descripcion' => 'Débito automático mensual', 'requiere_referencia' => true, 'comision_porcentaje' => 0.5, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Western Union', 'descripcion' => 'Transferencia Western Union', 'requiere_referencia' => true, 'comision_porcentaje' => 5.0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'MoneyGram', 'descripcion' => 'Transferencia MoneyGram', 'requiere_referencia' => true, 'comision_porcentaje' => 5.0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Pago a Plazos', 'descripcion' => 'Financiamiento a plazos', 'requiere_referencia' => true, 'comision_porcentaje' => 8.0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Seguro Veterinario', 'descripcion' => 'Cobertura de seguro', 'requiere_referencia' => true, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Descuento Empleado', 'descripcion' => 'Descuento especial para empleados', 'requiere_referencia' => false, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cortesía', 'descripcion' => 'Servicio gratuito/cortesía', 'requiere_referencia' => false, 'comision_porcentaje' => 0, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
