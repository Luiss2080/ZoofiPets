<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagosSeeder extends Seeder
{
    public function run()
    {
        $pagos = [
            [
                'venta_id' => 1,
                'metodo_pago_id' => 1,
                'monto_pagado' => 158.50,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-15 10:30:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 2,
                'metodo_pago_id' => 2,
                'monto_pagado' => 262.86,
                'numero_transaccion' => 'TXN001234567',
                'fecha_pago' => '2024-01-16 11:15:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 3,
                'metodo_pago_id' => 1,
                'monto_pagado' => 91.29,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-17 14:20:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 4,
                'metodo_pago_id' => 3,
                'monto_pagado' => 445.75,
                'numero_transaccion' => 'DEP789123456',
                'fecha_pago' => '2024-01-18 09:45:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 5,
                'metodo_pago_id' => 2,
                'monto_pagado' => 67.80,
                'numero_transaccion' => 'TXN987654321',
                'fecha_pago' => '2024-01-19 16:10:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 6,
                'metodo_pago_id' => 1,
                'monto_pagado' => 203.45,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-20 13:25:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 7,
                'metodo_pago_id' => 4,
                'monto_pagado' => 124.90,
                'numero_transaccion' => 'CHEQ456789',
                'fecha_pago' => '2024-01-21 12:00:00',
                'estado_pago' => 'pendiente'
            ],
            [
                'venta_id' => 8,
                'metodo_pago_id' => 2,
                'monto_pagado' => 389.60,
                'numero_transaccion' => 'TXN456123789',
                'fecha_pago' => '2024-01-22 15:30:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 9,
                'metodo_pago_id' => 1,
                'monto_pagado' => 78.25,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-23 10:15:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 10,
                'metodo_pago_id' => 3,
                'monto_pagado' => 556.40,
                'numero_transaccion' => 'DEP321654987',
                'fecha_pago' => '2024-01-24 11:45:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 11,
                'metodo_pago_id' => 2,
                'monto_pagado' => 134.75,
                'numero_transaccion' => 'TXN741852963',
                'fecha_pago' => '2024-01-25 14:50:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 12,
                'metodo_pago_id' => 1,
                'monto_pagado' => 245.30,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-26 09:20:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 13,
                'metodo_pago_id' => 4,
                'monto_pagado' => 167.85,
                'numero_transaccion' => 'CHEQ789456123',
                'fecha_pago' => '2024-01-27 16:35:00',
                'estado_pago' => 'pendiente'
            ],
            [
                'venta_id' => 14,
                'metodo_pago_id' => 2,
                'monto_pagado' => 98.50,
                'numero_transaccion' => 'TXN159753486',
                'fecha_pago' => '2024-01-28 13:10:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 15,
                'metodo_pago_id' => 1,
                'monto_pagado' => 312.95,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-01-29 15:40:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 16,
                'metodo_pago_id' => 3,
                'monto_pagado' => 423.60,
                'numero_transaccion' => 'DEP654987321',
                'fecha_pago' => '2024-01-30 10:55:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 17,
                'metodo_pago_id' => 2,
                'monto_pagado' => 189.40,
                'numero_transaccion' => 'TXN357951468',
                'fecha_pago' => '2024-01-31 12:25:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 18,
                'metodo_pago_id' => 1,
                'monto_pagado' => 76.80,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-02-01 14:15:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 19,
                'metodo_pago_id' => 4,
                'monto_pagado' => 287.25,
                'numero_transaccion' => 'CHEQ123789456',
                'fecha_pago' => '2024-02-02 11:30:00',
                'estado_pago' => 'pendiente'
            ],
            [
                'venta_id' => 20,
                'metodo_pago_id' => 2,
                'monto_pagado' => 145.90,
                'numero_transaccion' => 'TXN852741963',
                'fecha_pago' => '2024-02-03 16:45:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 1,
                'metodo_pago_id' => 3,
                'monto_pagado' => 50.00,
                'numero_transaccion' => 'DEP987321654',
                'fecha_pago' => '2024-02-04 09:00:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 2,
                'metodo_pago_id' => 1,
                'monto_pagado' => 234.75,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-02-05 13:20:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 3,
                'metodo_pago_id' => 2,
                'monto_pagado' => 178.35,
                'numero_transaccion' => 'TXN963741852',
                'fecha_pago' => '2024-02-06 15:10:00',
                'estado_pago' => 'completado'
            ],
            [
                'venta_id' => 4,
                'metodo_pago_id' => 4,
                'monto_pagado' => 356.80,
                'numero_transaccion' => 'CHEQ654321987',
                'fecha_pago' => '2024-02-07 10:40:00',
                'estado_pago' => 'pendiente'
            ],
            [
                'venta_id' => 5,
                'metodo_pago_id' => 1,
                'monto_pagado' => 125.45,
                'numero_transaccion' => null,
                'fecha_pago' => '2024-02-08 14:55:00',
                'estado_pago' => 'completado'
            ]
        ];

        DB::table('pagos')->insert($pagos);
    }
}
