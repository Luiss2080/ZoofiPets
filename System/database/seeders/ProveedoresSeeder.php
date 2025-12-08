<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('proveedores')->insert([
            [
                'nombre' => 'Laboratorios VetPharm',
                'ruc' => '1234567890001',
                'telefono' => '023456789',
                'email' => 'ventas@vetpharm.com',
                'direccion' => 'Av. Industrial #123, Quito',
                'contacto_principal' => 'Ing. Pedro Sánchez',
                'productos_suministrados' => 'Medicamentos, vacunas, antibióticos',
                'tipo' => 'Farmaceutico',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alimentos Premium Pet',
                'ruc' => '0987654321001',
                'telefono' => '024567890',
                'email' => 'contacto@premiumpet.com',
                'direccion' => 'Zona Industrial Norte, Quito',
                'contacto_principal' => 'Lcda. Carmen Morales',
                'productos_suministrados' => 'Alimentos balanceados, treats, suplementos',
                'tipo' => 'Alimentos',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Distribuidora PetWorld',
                'ruc' => '1122334455001',
                'telefono' => '025678901',
                'email' => 'info@petworld.ec',
                'direccion' => 'Mall de Distribución, Guayaquil',
                'contacto_principal' => 'Sr. Luis Vargas',
                'productos_suministrados' => 'Accesorios, juguetes, productos de higiene',
                'tipo' => 'Mixto',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
