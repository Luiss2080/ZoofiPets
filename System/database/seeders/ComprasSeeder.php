<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compras = [
            [
                'numero_orden' => 'OC-2025-0001',
                'proveedor_id' => 1, // Distribuidora Mascotas Felices
                'empleado_id' => 13, // Elena Administrador
                'fecha_orden' => Carbon::now()->subDays(15),
                'fecha_entrega_estimada' => Carbon::now()->subDays(8),
                'fecha_entrega_real' => Carbon::now()->subDays(9),
                'subtotal' => 1456.80,
                'impuesto' => 174.82,
                'total' => 1631.62,
                'estado' => 'Recibida',
                'observaciones' => 'Entrega completa sin novedades',
            ],
            [
                'numero_orden' => 'OC-2025-0002',
                'proveedor_id' => 2, // Laboratorios Veterinarios Unidos
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(12),
                'fecha_entrega_estimada' => Carbon::now()->subDays(9),
                'fecha_entrega_real' => Carbon::now()->subDays(10),
                'subtotal' => 2340.50,
                'impuesto' => 280.86,
                'total' => 2621.36,
                'estado' => 'Recibida',
                'observaciones' => 'Medicamentos recibidos con certificaciones',
            ],
            [
                'numero_orden' => 'OC-2025-0003',
                'proveedor_id' => 3, // Accesorios Pet Store
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(10),
                'fecha_entrega_estimada' => Carbon::now()->addDays(4),
                'fecha_entrega_real' => null,
                'subtotal' => 890.75,
                'impuesto' => 106.89,
                'total' => 997.64,
                'estado' => 'Pendiente',
                'observaciones' => 'En tránsito desde bodega central',
            ],
            [
                'numero_orden' => 'OC-2025-0004',
                'proveedor_id' => 4, // Productos de Higiene Animal
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(8),
                'fecha_entrega_estimada' => Carbon::now()->subDays(1),
                'fecha_entrega_real' => Carbon::now()->subDays(2),
                'subtotal' => 567.30,
                'impuesto' => 68.08,
                'total' => 635.38,
                'estado' => 'Recibida',
                'observaciones' => 'Productos de limpieza completos',
            ],
            [
                'numero_orden' => 'OC-2025-0005',
                'proveedor_id' => 5, // Juguetes y Entretenimiento
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(7),
                'fecha_entrega_estimada' => Carbon::now()->addDays(3),
                'fecha_entrega_real' => null,
                'subtotal' => 423.60,
                'impuesto' => 50.83,
                'total' => 474.43,
                'estado' => 'Confirmada',
                'observaciones' => 'Orden confirmada por proveedor',
            ],
            [
                'numero_orden' => 'OC-2025-0006',
                'proveedor_id' => 6, // Suplementos Nutricionales Pro
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(5),
                'fecha_entrega_estimada' => Carbon::now()->addDays(9),
                'fecha_entrega_real' => null,
                'subtotal' => 1234.90,
                'impuesto' => 148.19,
                'total' => 1383.09,
                'estado' => 'Pendiente',
                'observaciones' => 'Productos especializados en fabricación',
            ],
            [
                'numero_orden' => 'OC-2025-0007',
                'proveedor_id' => 1,
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(20),
                'fecha_entrega_estimada' => Carbon::now()->subDays(13),
                'fecha_entrega_real' => Carbon::now()->subDays(13),
                'subtotal' => 2156.40,
                'impuesto' => 258.77,
                'total' => 2415.17,
                'estado' => 'Recibida',
                'observaciones' => 'Reposición masiva de alimentos',
            ],
            [
                'numero_orden' => 'OC-2025-0008',
                'proveedor_id' => 7, // NutriPet Distribuciones
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(18),
                'fecha_entrega_estimada' => Carbon::now()->subDays(8),
                'fecha_entrega_real' => Carbon::now()->subDays(6),
                'subtotal' => 789.25,
                'impuesto' => 94.71,
                'total' => 883.96,
                'estado' => 'Recibida',
                'observaciones' => 'Alimentos premium recibidos correctamente',
            ],
            [
                'numero_orden' => 'OC-2025-0009',
                'proveedor_id' => 8, // Farmavet Laboratorios
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(16),
                'fecha_entrega_estimada' => Carbon::now()->subDays(11),
                'fecha_entrega_real' => Carbon::now()->subDays(12),
                'subtotal' => 1678.90,
                'impuesto' => 201.47,
                'total' => 1880.37,
                'estado' => 'Recibida',
                'observaciones' => 'Medicamentos de emergencia',
            ],
            [
                'numero_orden' => 'OC-2025-0010',
                'proveedor_id' => 9, // Equipos Veterinarios del Sur
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(14),
                'fecha_entrega_estimada' => Carbon::now()->subDays(4),
                'fecha_entrega_real' => null,
                'subtotal' => 3456.70,
                'impuesto' => 414.80,
                'total' => 3871.50,
                'estado' => 'Enviada',
                'observaciones' => 'Equipos especiales en tránsito',
            ],
            [
                'numero_orden' => 'OC-2025-0011',
                'proveedor_id' => 10, // Casa Veterinaria Nacional
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(11),
                'fecha_entrega_estimada' => Carbon::now()->subDays(4),
                'fecha_entrega_real' => Carbon::now()->subDays(5),
                'subtotal' => 654.30,
                'impuesto' => 78.52,
                'total' => 732.82,
                'estado' => 'Recibida',
                'observaciones' => 'Material quirúrgico recibido',
            ],
            [
                'numero_orden' => 'OC-2025-0012',
                'proveedor_id' => 2,
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(9),
                'fecha_entrega_estimada' => Carbon::now()->subDays(6),
                'fecha_entrega_real' => Carbon::now()->subDays(7),
                'subtotal' => 987.60,
                'impuesto' => 118.51,
                'total' => 1106.11,
                'estado' => 'Recibida',
                'observaciones' => 'Antibioticos y antiinflamatorios',
            ],
            [
                'numero_orden' => 'OC-2025-0013',
                'proveedor_id' => 11, // Importadora de Productos Veterinarios
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(6),
                'fecha_entrega_estimada' => Carbon::now()->addDays(14),
                'fecha_entrega_real' => null,
                'subtotal' => 2345.80,
                'impuesto' => 281.50,
                'total' => 2627.30,
                'estado' => 'Pendiente',
                'observaciones' => 'Productos importados en proceso aduanero',
            ],
            [
                'numero_orden' => 'OC-2025-0014',
                'proveedor_id' => 12, // Comercial Pet Care
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(4),
                'fecha_entrega_estimada' => Carbon::now()->addDays(3),
                'fecha_entrega_real' => null,
                'subtotal' => 445.75,
                'impuesto' => 53.49,
                'total' => 499.24,
                'estado' => 'Confirmada',
                'observaciones' => 'Juguetes especializados confirmados',
            ],
            [
                'numero_orden' => 'OC-2025-0015',
                'proveedor_id' => 1,
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(25),
                'fecha_entrega_estimada' => Carbon::now()->subDays(18),
                'fecha_entrega_real' => Carbon::now()->subDays(17),
                'subtotal' => 1789.45,
                'impuesto' => 214.73,
                'total' => 2004.18,
                'estado' => 'Recibida',
                'observaciones' => 'Stock mensual de alimentos',
            ],
            [
                'numero_orden' => 'OC-2025-0016',
                'proveedor_id' => 13, // VetSupply Ecuador
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(3),
                'fecha_entrega_estimada' => Carbon::now()->addDays(2),
                'fecha_entrega_real' => null,
                'subtotal' => 678.90,
                'impuesto' => 81.47,
                'total' => 760.37,
                'estado' => 'Confirmada',
                'observaciones' => 'Instrumental quirúrgico urgente',
            ],
            [
                'numero_orden' => 'OC-2025-0017',
                'proveedor_id' => 14, // Distribuidora Animal Health
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(2),
                'fecha_entrega_estimada' => Carbon::now()->addDays(5),
                'fecha_entrega_real' => null,
                'subtotal' => 1234.60,
                'impuesto' => 148.15,
                'total' => 1382.75,
                'estado' => 'Pendiente',
                'observaciones' => 'Vacunas especiales solicitadas',
            ],
            [
                'numero_orden' => 'OC-2025-0018',
                'proveedor_id' => 15, // Biovet Productos Naturales
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(1),
                'fecha_entrega_estimada' => Carbon::now()->addDays(10),
                'fecha_entrega_real' => null,
                'subtotal' => 567.40,
                'impuesto' => 68.09,
                'total' => 635.49,
                'estado' => 'Pendiente',
                'observaciones' => 'Productos orgánicos y naturales',
            ],
            [
                'numero_orden' => 'OC-2025-0019',
                'proveedor_id' => 16, // Tech Vet Solutions
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(30),
                'fecha_entrega_estimada' => Carbon::now()->subDays(16),
                'fecha_entrega_real' => Carbon::now()->subDays(15),
                'subtotal' => 4567.80,
                'impuesto' => 548.14,
                'total' => 5115.94,
                'estado' => 'Recibida',
                'observaciones' => 'Equipo de diagnóstico instalado',
            ],
            [
                'numero_orden' => 'OC-2025-0020',
                'proveedor_id' => 17, // Global Pet Nutrition
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(22),
                'fecha_entrega_estimada' => Carbon::now()->subDays(15),
                'fecha_entrega_real' => Carbon::now()->subDays(16),
                'subtotal' => 2134.50,
                'impuesto' => 256.14,
                'total' => 2390.64,
                'estado' => 'Recibida',
                'observaciones' => 'Suplementos importados de alta gama',
            ],
            [
                'numero_orden' => 'OC-2025-0021',
                'proveedor_id' => 18, // Clínica Veterinaria Supplies
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(19),
                'fecha_entrega_estimada' => Carbon::now()->subDays(12),
                'fecha_entrega_real' => Carbon::now()->subDays(13),
                'subtotal' => 876.20,
                'impuesto' => 105.14,
                'total' => 981.34,
                'estado' => 'Recibida',
                'observaciones' => 'Material de curación y vendajes',
            ],
            [
                'numero_orden' => 'OC-2025-0022',
                'proveedor_id' => 19, // PetCare Especialistas
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now()->subDays(13),
                'fecha_entrega_estimada' => Carbon::now()->subDays(6),
                'fecha_entrega_real' => Carbon::now()->subDays(7),
                'subtotal' => 1345.70,
                'impuesto' => 161.48,
                'total' => 1507.18,
                'estado' => 'Recibida',
                'observaciones' => 'Productos especializados para exóticos',
            ],
            [
                'numero_orden' => 'OC-2025-0023',
                'proveedor_id' => 20, // Veterinary Express
                'empleado_id' => 13,
                'fecha_orden' => Carbon::now(),
                'fecha_entrega_estimada' => Carbon::now()->addDays(7),
                'fecha_entrega_real' => null,
                'subtotal' => 756.80,
                'impuesto' => 90.82,
                'total' => 847.62,
                'estado' => 'Pendiente',
                'observaciones' => 'Pedido urgente procesado hoy',
            ]
        ];

        foreach ($compras as $compra) {
            DB::table('compras')->insert([
                'numero_orden' => $compra['numero_orden'],
                'proveedor_id' => $compra['proveedor_id'],
                'empleado_id' => $compra['empleado_id'],
                'fecha_orden' => $compra['fecha_orden'],
                'fecha_entrega_estimada' => $compra['fecha_entrega_estimada'],
                'fecha_entrega_real' => $compra['fecha_entrega_real'],
                'subtotal' => $compra['subtotal'],
                'impuesto' => $compra['impuesto'],
                'total' => $compra['total'],
                'estado' => $compra['estado'],
                'observaciones' => $compra['observaciones'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
