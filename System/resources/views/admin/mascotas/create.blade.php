<x-admin>
    <div class="flex flex-col gap-6 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Registrar Nueva Mascota</h1>
            <a href="{{ route('admin.mascotas.index') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                &larr; Volver
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-8 shadow-lg">
            <form action="{{ route('admin.mascotas.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Información de la Mascota -->
                    <div class="md:col-span-2">
                        <label class="text-gray-300 font-medium">Dueño (Cliente) *</label>
                        <select name="cliente_id" required class="w-full bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="">Seleccionar Dueño...</option>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->cedula }} - {{ $cliente->nombre }} {{ $cliente->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('cliente_id') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Código Mascota *</label>
                        <input type="text" name="codigo_mascota" value="{{ old('codigo_mascota', strtoupper(uniqid('PET'))) }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('codigo_mascota') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Nombre *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('nombre') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Especie *</label>
                        <select name="especie" required class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="Perro" {{ old('especie') == 'Perro' ? 'selected' : '' }}>Perro</option>
                            <option value="Gato" {{ old('especie') == 'Gato' ? 'selected' : '' }}>Gato</option>
                            <option value="Ave" {{ old('especie') == 'Ave' ? 'selected' : '' }}>Ave</option>
                            <option value="Roedor" {{ old('especie') == 'Roedor' ? 'selected' : '' }}>Roedor</option>
                            <option value="Otro" {{ old('especie') == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Raza</label>
                        <input type="text" name="raza" value="{{ old('raza') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Sexo</label>
                        <select name="sexo" class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="">Seleccionar...</option>
                            <option value="Macho" {{ old('sexo') == 'Macho' ? 'selected' : '' }}>Macho</option>
                            <option value="Hembra" {{ old('sexo') == 'Hembra' ? 'selected' : '' }}>Hembra</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Fecha Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Peso (Kg)</label>
                        <input type="number" step="0.01" name="peso" value="{{ old('peso') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>

                     <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Color</label>
                        <input type="text" name="color" value="{{ old('color') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-6 py-3 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_15px_#00f3ff]">
                        Guardar Mascota
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
