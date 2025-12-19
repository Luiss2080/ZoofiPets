<x-admin>
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Gestión de Mascotas</h1>
            <a href="{{ route('admin.mascotas.create') }}" class="px-4 py-2 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_10px_#00f3ff]">
                + Nueva Mascota
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6 overflow-x-auto">
            <table class="w-full text-left text-gray-300">
                <thead class="text-sm uppercase bg-gray-900/50 text-gray-400">
                    <tr>
                        <th class="px-4 py-3">Código</th>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Dueño</th>
                        <th class="px-4 py-3">Especie/Raza</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($mascotas as $mascota)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="px-4 py-3">{{ $mascota->codigo_mascota }}</td>
                            <td class="px-4 py-3 font-medium text-white">{{ $mascota->nombre }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.clientes.edit', $mascota->cliente_id) }}" class="text-neon-blue hover:underline">
                                    {{ $mascota->cliente->nombre }} {{ $mascota->cliente->apellido }}
                                </a>
                            </td>
                            <td class="px-4 py-3">{{ $mascota->especie }} - {{ $mascota->raza ?? 'N/A' }}</td>
                            <td class="px-4 py-3 flex gap-2">
                                <a href="{{ route('admin.mascotas.edit', $mascota) }}" class="text-neon-pink hover:text-white transition">Editar</a>
                                <form action="{{ route('admin.mascotas.destroy', $mascota) }}" method="POST" onsubmit="return confirm('¿Eliminar mascota?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-400 transition">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                No hay mascotas registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $mascotas->links() }}
            </div>
        </div>
    </div>
</x-admin>
