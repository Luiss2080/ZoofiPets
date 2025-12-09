<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categorias_productos')->insert([
            ['nombre' => 'Medicamentos', 'descripcion' => 'Medicamentos y productos farmacéuticos para mascotas', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Alimentos Secos', 'descripcion' => 'Alimentos balanceados secos para perros y gatos', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Alimentos Húmedos', 'descripcion' => 'Alimentos húmedos enlatados y sobres', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Snacks y Treats', 'descripcion' => 'Premios y golosinas para mascotas', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Collares y Correas', 'descripcion' => 'Collares, correas y arneses', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Juguetes', 'descripcion' => 'Juguetes y entretenimiento para mascotas', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Higiene y Cuidado', 'descripcion' => 'Productos de higiene y cuidado personal', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Camas y Descanso', 'descripcion' => 'Camas, mantas y accesorios de descanso', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Transportadoras', 'descripcion' => 'Transportadoras y jaulas de viaje', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Comederos y Bebederos', 'descripcion' => 'Platos, comederos y bebederos', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Antiparasitarios', 'descripcion' => 'Productos antiparasitarios externos e internos', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vitaminas y Suplementos', 'descripcion' => 'Vitaminas y complementos nutricionales', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Equipos Médicos', 'descripcion' => 'Instrumentos y equipos para uso veterinario', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Acuarios y Peceras', 'descripcion' => 'Acuarios, filtros y accesorios para peces', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Aves', 'descripcion' => 'Productos especializados para aves', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Roedores', 'descripcion' => 'Productos para hamsters, conejos y roedores', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Reptiles', 'descripcion' => 'Productos especializados para reptiles', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Productos de Limpieza', 'descripcion' => 'Limpiadores, desinfectantes y desodorantes', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ropa y Accesorios', 'descripcion' => 'Ropa, zapatos y accesorios de moda', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Material Quirúrgico', 'descripcion' => 'Instrumental y material para cirugías', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Productos Orgánicos', 'descripcion' => 'Alimentos y productos orgánicos naturales', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Productos para Cachorros', 'descripcion' => 'Productos especializados para animales jóvenes', 'activa' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
