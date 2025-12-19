<x-admin>
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Gestión de Clientes</h1>
            <a href="{{ route('admin.clientes.create') }}" class="px-4 py-2 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_10px_#00f3ff]">
                + Nuevo Cliente
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6 overflow-x-auto">
            <table class="w-full text-left text-gray-300">
                <thead class="text-sm uppercase bg-gray-900/50 text-gray-400">
                    <tr>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Cédula</th>
                        <th class="px-4 py-3">Teléfono</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($clientes as $cliente)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="px-4 py-3 font-medium text-white">{{ $cliente->nombre }} {{ $cliente->apellido }}</td>
                            <td class="px-4 py-3">{{ $cliente->cedula ?? 'N/A' }}</td>
                            <td class="px-4 py-3">{{ $cliente->telefono ?? 'N/A' }}</td>
                            <td class="px-4 py-3">{{ $cliente->email ?? 'N/A' }}</td>
                            <td class="px-4 py-3 flex gap-2">
                                <a href="{{ route('admin.clientes.edit', $cliente) }}" class="text-neon-pink hover:text-white transition">Editar</a>
                                <form action="{{ route('admin.clientes.destroy', $cliente) }}" method="POST" onsubmit="return confirm('¿Eliminar cliente?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-400 transition">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                No hay clientes registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
</x-admin>