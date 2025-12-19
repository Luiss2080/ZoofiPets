<x-admin>
    <div class="flex flex-col gap-6 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Agendar Nueva Cita</h1>
            <a href="{{ route('admin.citas.index') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                &larr; Volver
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-8 shadow-lg">
            <form action="{{ route('admin.citas.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Selección de Cliente y Mascota -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Cliente *</label>
                        <select name="cliente_id" id="cliente_select" required 
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition"
                            onchange="loadMascotas(this.value)">
                            <option value="">Seleccionar Cliente...</option>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->cedula }} - {{ $cliente->nombre }} {{ $cliente->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('cliente_id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Mascota *</label>
                        <select name="mascota_id" id="mascota_select" required 
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition disabled:opacity-50"
                            disabled>
                            <option value="">Seleccione un cliente primero...</option>
                        </select>
                        @error('mascota_id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Detalles de la Cita -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Veterinario *</label>
                        <select name="empleado_id" required class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="">Seleccionar Veterinario...</option>
                            @foreach($veterinarios as $vet)
                                <option value="{{ $vet->id }}" {{ old('empleado_id') == $vet->id ? 'selected' : '' }}>
                                    Dr. {{ $vet->nombre }} {{ $vet->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('empleado_id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Fecha y Hora *</label>
                        <input type="datetime-local" name="fecha_hora" value="{{ old('fecha_hora') }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('fecha_hora') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Estado</label>
                        <select name="estado" class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="Programada" selected>Programada</option>
                            <option value="Confirmada">Confirmada</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-gray-300 font-medium">Motivo Consulta</label>
                        <textarea name="motivo_consulta" rows="3"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">{{ old('motivo_consulta') }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-6 py-3 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_15px_#00f3ff]">
                        Agendar Cita
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function loadMascotas(clienteId) {
            const select = document.getElementById('mascota_select');
            
            if (!clienteId) {
                select.innerHTML = '<option value="">Seleccione un cliente primero...</option>';
                select.disabled = true;
                return;
            }

            select.innerHTML = '<option value="">Cargando...</option>';
            select.disabled = true;

            fetch(`/admin/clientes/${clienteId}/mascotas`)
                .then(response => response.json())
                .then(data => {
                    select.innerHTML = '<option value="">Seleccionar Mascota...</option>';
                    data.forEach(mascota => {
                        select.innerHTML += `<option value="${mascota.id}">${mascota.nombre} (${mascota.especie})</option>`;
                    });
                    select.disabled = false;
                })
                .catch(error => {
                    console.error('Error:', error);
                    select.innerHTML = '<option value="">Error al cargar</option>';
                });
        }
    </script>
</x-admin>
