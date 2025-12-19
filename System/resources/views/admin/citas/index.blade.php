<x-admin>
    <div class="flex flex-col gap-6">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Gestión de Citas Médicas</h1>
            <a href="{{ route('admin.citas.create') }}" class="px-4 py-2 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_10px_#00f3ff]">
                + Agendar Cita
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6 overflow-x-auto">
            <table class="w-full text-left text-gray-300">
                <thead class="text-sm uppercase bg-gray-900/50 text-gray-400">
                    <tr>
                        <th class="px-4 py-3">Fecha/Hora</th>
                        <th class="px-4 py-3">Paciente</th>
                        <th class="px-4 py-3">Dueño</th>
                        <th class="px-4 py-3">Veterinario</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($citas as $cita)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="px-4 py-3 font-medium text-white">
                                {{ $cita->fecha_hora->format('d/m/Y H:i') }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $cita->mascota->nombre }} <span class="text-xs text-gray-500">({{ $cita->mascota->especie }})</span>
                            </td>
                            <td class="px-4 py-3">
                                {{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}
                            </td>
                            <td class="px-4 py-3">
                                Dr/a. {{ $cita->veterinario->nombre }} {{ $cita->veterinario->apellido }}
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 rounded text-xs font-bold
                                    @if($cita->estado == 'Programada') bg-blue-500/20 text-blue-400
                                    @elseif($cita->estado == 'Confirmada') bg-green-500/20 text-green-400
                                    @elseif($cita->estado == 'Cancelada') bg-red-500/20 text-red-400
                                    @else bg-gray-500/20 text-gray-400 @endif">
                                    {{ $cita->estado }}
                                </span>
                            </td>
                            <td class="px-4 py-3 flex gap-2">
                                <a href="{{ route('admin.citas.edit', $cita) }}" class="text-neon-pink hover:text-white transition">Editar</a>
                                <form action="{{ route('admin.citas.destroy', $cita) }}" method="POST" onsubmit="return confirm('¿Cancelar cita?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-400 transition">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                                No hay citas programadas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $citas->links() }}
            </div>
        </div>
    </div>
</x-admin>
