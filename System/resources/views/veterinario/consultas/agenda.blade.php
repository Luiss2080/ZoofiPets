<x-admin>
    <div class="flex flex-col gap-6">
        <h1 class="text-3xl font-bold text-white">Agenda Veterinaria</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($citas as $cita)
                <div class="bg-gray-800/50 border border-gray-700 rounded-xl p-6 flex flex-col gap-4 shadow-lg hover:border-neon-blue transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-2 opacity-10 text-9xl">🐾</div>
                    
                    <div class="flex justify-between items-start z-10">
                        <div>
                            <h3 class="text-xl font-bold text-white">{{ $cita->mascota->nombre }}</h3>
                            <p class="text-gray-400 text-sm">{{ $cita->mascota->especie }} - {{ $cita->mascota->raza }}</p>
                        </div>
                        <span class="px-3 py-1 bg-neon-blue/20 text-neon-blue rounded-full text-xs font-bold">
                            {{ $cita->fecha_hora->format('H:i') }}
                        </span>
                    </div>

                    <div class="z-10 space-y-2">
                        <p class="text-gray-300 text-sm"><strong class="text-gray-500">Mótivo:</strong> {{ $cita->motivo_consulta ?? 'Consulta General' }}</p>
                        <p class="text-gray-300 text-sm"><strong class="text-gray-500">Dueño:</strong> {{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</p>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-700 z-10">
                        <a href="{{ route('admin.consultas.create', ['cita_id' => $cita->id]) }}" 
                           class="block w-full text-center py-2 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_10px_#00f3ff]">
                            Iniciar Consulta
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <p class="text-xl">No hay citas programadas pendientes para hoy.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-admin>
