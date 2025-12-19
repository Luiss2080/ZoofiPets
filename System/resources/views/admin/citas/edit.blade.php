<x-admin>
    <div class="flex flex-col gap-6 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Editar Cita Médica</h1>
            <a href="{{ route('admin.citas.index') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                &larr; Volver
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-8 shadow-lg">
            <form action="{{ route('admin.citas.update', $cita->id) }}" method="POST" class="flex flex-col gap-6">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Selección de Cliente y Mascota -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Cliente</label>
                        <!-- Cliente deshabilitado para evitar inconsistencias graves, o editable si se requiere reprogramar para otro dueño (raro) -->
                        <div class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-gray-400">
                            {{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}
                        </div>
                        <p class="text-xs text-gray-500">Para cambiar de dueño, cancele esta cita y cree una nueva.</p>
                    </div>

                    <div class="flex flex-col gap-2">
                         <label class="text-gray-300 font-medium">Mascota</label>
                        <div class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-gray-400">
                             {{ $cita->mascota->nombre }} ({{ $cita->mascota->especie }})
                        </div>
                    </div>

                    <!-- Detalles de la Cita -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Veterinario *</label>
                        <select name="empleado_id" required class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="">Seleccionar Veterinario...</option>
                            @foreach($veterinarios as $vet)
                                <option value="{{ $vet->id }}" {{ old('empleado_id', $cita->empleado_id) == $vet->id ? 'selected' : '' }}>
                                    Dr. {{ $vet->nombre }} {{ $vet->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('empleado_id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Fecha y Hora *</label>
                        <input type="datetime-local" name="fecha_hora" value="{{ old('fecha_hora', $cita->fecha_hora->format('Y-m-d\TH:i')) }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('fecha_hora') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Estado</label>
                        <select name="estado" class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="Programada" {{ $cita->estado == 'Programada' ? 'selected' : '' }}>Programada</option>
                            <option value="Confirmada" {{ $cita->estado == 'Confirmada' ? 'selected' : '' }}>Confirmada</option>
                            <option value="En_Proceso" {{ $cita->estado == 'En_Proceso' ? 'selected' : '' }}>En Proceso</option>
                            <option value="Completada" {{ $cita->estado == 'Completada' ? 'selected' : '' }}>Completada</option>
                            <option value="Cancelada" {{ $cita->estado == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
                            <option value="No_Asistio" {{ $cita->estado == 'No_Asistio' ? 'selected' : '' }}>No Asistió</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-gray-300 font-medium">Motivo Consulta</label>
                        <textarea name="motivo_consulta" rows="3"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">{{ old('motivo_consulta', $cita->motivo_consulta) }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-6 py-3 bg-neon-purple text-white font-bold rounded hover:bg-neon-purple/80 transition shadow-[0_0_15px_#bc13fe]">
                        Actualizar Cita
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
