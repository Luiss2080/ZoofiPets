<x-admin>
    <div class="max-w-4xl mx-auto flex flex-col gap-6">
        <div class="flex justify-between items-center print:hidden">
            <h1 class="text-3xl font-bold text-white">Detalle de Venta</h1>
            <div class="flex gap-2">
                <button onclick="window.print()" class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition">
                    Imprimir Recibo
                </button>
                <a href="{{ route('admin.ventas.index') }}" class="px-4 py-2 bg-gray-800 text-gray-300 rounded hover:bg-gray-700 transition">
                    Volver
                </a>
            </div>
        </div>

        <div class="bg-white text-black p-8 rounded-xl shadow-lg print:shadow-none print:w-full">
            <div class="flex justify-between items-start border-b border-gray-300 pb-4 mb-4">
                <div>
                    <h2 class="text-2xl font-bold uppercase tracking-widest text-gray-800">ZoofiPets</h2>
                    <p class="text-sm text-gray-600">Clínica Veterinaria</p>
                    <p class="text-sm text-gray-600">Calle Falsa 123, Ciudad</p>
                    <p class="text-sm text-gray-600">Tel: 555-1234</p>
                </div>
                <div class="text-right">
                    <h3 class="font-bold text-xl text-gray-700">{{ $venta->numero_factura }}</h3>
                    <p class="text-sm text-gray-500">Fecha: {{ $venta->fecha_venta->format('d/m/Y H:i') }}</p>
                    <p class="text-sm text-gray-500">Atendido por: {{ $venta->empleado->nombre }}</p>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="font-bold text-gray-700 border-b border-gray-300 mb-2">Cliente</h3>
                @if($venta->cliente)
                    <p class="font-bold">{{ $venta->cliente->nombre }} {{ $venta->cliente->apellido }}</p>
                    <p>Cedula: {{ $venta->cliente->cedula }}</p>
                @else
                    <p class="italic text-gray-500">Cliente General (Mostrador)</p>
                @endif
            </div>

            <table class="w-full text-left mb-6">
                <thead>
                    <tr class="border-b-2 border-gray-800 text-gray-600 text-sm uppercase">
                        <th class="py-2">Descripción</th>
                        <th class="py-2 text-center">Cant.</th>
                        <th class="py-2 text-right">Precio Unit.</th>
                        <th class="py-2 text-right">Total</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @foreach($venta->detalles as $detalle)
                        <tr class="border-b border-gray-200">
                            <td class="py-2">{{ $detalle->descripcion }}</td>
                            <td class="py-2 text-center">{{ $detalle->cantidad }}</td>
                            <td class="py-2 text-right">${{ number_format($detalle->precio_unitario, 2) }}</td>
                            <td class="py-2 text-right">${{ number_format($detalle->subtotal, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="flex justify-end">
                <div class="w-1/2">
                    <div class="flex justify-between py-1 text-gray-600">
                        <span>Subtotal:</span>
                        <span>${{ number_format($venta->subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between py-1 text-gray-600">
                        <span>Impuestos (16%):</span>
                        <span>${{ number_format($venta->impuesto, 2) }}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t-2 border-gray-800 text-xl font-bold text-gray-800 mt-2">
                        <span>Total:</span>
                        <span>${{ number_format($venta->total, 2) }}</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center text-xs text-gray-500 pt-4 border-t border-gray-300">
                <p>¡Gracias por su compra!</p>
                <p>ZoofiPets - Cuidando a tus mejores amigos</p>
            </div>
        </div>
    </div>
</x-admin>
