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
                'monto' => 158.50,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo completo'
            ],
            [
                'venta_id' => 2,
                'metodo_pago_id' => 2,
                'monto' => 262.86,
                'referencia' => 'TXN001234567',
                'comision' => 5.26,
                'observaciones' => 'Pago con tarjeta de crédito'
            ],
            [
                'venta_id' => 3,
                'metodo_pago_id' => 1,
                'monto' => 91.29,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 4,
                'metodo_pago_id' => 3,
                'monto' => 445.75,
                'referencia' => 'DEP789123456',
                'comision' => 2.23,
                'observaciones' => 'Transferencia bancaria'
            ],
            [
                'venta_id' => 5,
                'metodo_pago_id' => 2,
                'monto' => 67.80,
                'referencia' => 'TXN987654321',
                'comision' => 1.36,
                'observaciones' => 'Pago con tarjeta de débito'
            ],
            [
                'venta_id' => 6,
                'metodo_pago_id' => 1,
                'monto' => 203.45,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 7,
                'metodo_pago_id' => 4,
                'monto' => 124.90,
                'referencia' => 'CHEQ456789',
                'comision' => 0.00,
                'observaciones' => 'Pago con cheque'
            ],
            [
                'venta_id' => 8,
                'metodo_pago_id' => 2,
                'monto' => 389.60,
                'referencia' => 'TXN456123789',
                'comision' => 7.79,
                'observaciones' => 'Pago con tarjeta de crédito'
            ],
            [
                'venta_id' => 9,
                'metodo_pago_id' => 1,
                'monto' => 78.25,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 10,
                'metodo_pago_id' => 3,
                'monto' => 556.40,
                'referencia' => 'DEP321654987',
                'comision' => 2.78,
                'observaciones' => 'Transferencia bancaria'
            ],
            [
                'venta_id' => 11,
                'metodo_pago_id' => 2,
                'monto' => 134.75,
                'referencia' => 'TXN741852963',
                'comision' => 2.70,
                'observaciones' => 'Pago con tarjeta de débito'
            ],
            [
                'venta_id' => 12,
                'metodo_pago_id' => 1,
                'monto' => 245.30,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 13,
                'metodo_pago_id' => 4,
                'monto' => 167.85,
                'referencia' => 'CHEQ789456123',
                'comision' => 0.00,
                'observaciones' => 'Pago con cheque'
            ],
            [
                'venta_id' => 14,
                'metodo_pago_id' => 2,
                'monto' => 98.50,
                'referencia' => 'TXN159753486',
                'comision' => 1.97,
                'observaciones' => 'Pago con tarjeta de crédito'
            ],
            [
                'venta_id' => 15,
                'metodo_pago_id' => 1,
                'monto' => 312.95,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 16,
                'metodo_pago_id' => 3,
                'monto' => 423.60,
                'referencia' => 'DEP654987321',
                'comision' => 2.12,
                'observaciones' => 'Transferencia bancaria'
            ],
            [
                'venta_id' => 17,
                'metodo_pago_id' => 2,
                'monto' => 189.40,
                'referencia' => 'TXN357951468',
                'comision' => 3.79,
                'observaciones' => 'Pago con tarjeta de débito'
            ],
            [
                'venta_id' => 18,
                'metodo_pago_id' => 1,
                'monto' => 76.80,
                'referencia' => null,
                'comision' => 0.00,
                'observaciones' => 'Pago en efectivo'
            ],
            [
                'venta_id' => 19,
                'metodo_pago_id' => 4,
                'monto' => 287.25,
                'referencia' => 'CHEQ123789456',
                'comision' => 0.00,
                'observaciones' => 'Pago con cheque'
            ],
            [
                'venta_id' => 20,
                'metodo_pago_id' => 2,
                'monto' => 145.90,
                'referencia' => 'TXN852741963',
                'comision' => 2.92,
                'observaciones' => 'Pago con tarjeta de crédito'
            ]
        ];

        DB::table('pagos')->insert($pagos);
    }
}
