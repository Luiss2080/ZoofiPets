<x-admin>
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Historial de Ventas</h1>
            <a href="{{ route('admin.ventas.create') }}" class="px-4 py-2 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_10px_#00f3ff]">
                + Nueva Venta (POS)
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6 overflow-x-auto">
            <table class="w-full text-left text-gray-300">
                <thead class="text-sm uppercase bg-gray-900/50 text-gray-400">
                    <tr>
                        <th class="px-4 py-3">Factura</th>
                        <th class="px-4 py-3">Fecha</th>
                        <th class="px-4 py-3">Cliente</th>
                        <th class="px-4 py-3">Total</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Vendedor</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($ventas as $venta)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="px-4 py-3 font-mono text-neon-blue">{{ $venta->numero_factura }}</td>
                            <td class="px-4 py-3">{{ $venta->fecha_venta->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-3">
                                {{ $venta->cliente->nombre ?? 'Cliente General' }} 
                                {{ $venta->cliente->apellido ?? '' }}
                            </td>
                            <td class="px-4 py-3 font-bold text-white">${{ number_format($venta->total, 2) }}</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 rounded text-xs font-bold bg-green-500/20 text-green-400">
                                    {{ $venta->estado }}
                                </span>
                            </td>
                            <td class="px-4 py-3">{{ $venta->empleado->nombre }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.ventas.show', $venta->id) }}" class="text-gray-400 hover:text-white">Ver Detalles</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                No hay ventas registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $ventas->links() }}
            </div>
        </div>
    </div>
</x-admin>
