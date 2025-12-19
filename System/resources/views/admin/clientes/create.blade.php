<x-admin>
    <div class="flex flex-col gap-6 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Registrar Nuevo Cliente</h1>
            <a href="{{ route('admin.clientes.index') }}" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                &larr; Volver
            </a>
        </div>

        <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-8 shadow-lg">
            <form action="{{ route('admin.clientes.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Información Personal -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Cédula / DNI *</label>
                        <input type="text" name="cedula" value="{{ old('cedula') }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('cedula') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Nombre *</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('nombre') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Apellido *</label>
                        <input type="text" name="apellido" value="{{ old('apellido') }}" required
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                        @error('apellido') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Teléfono</label>
                        <input type="text" name="telefono" value="{{ old('telefono') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-300 font-medium">Género</label>
                        <select name="genero" class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                            <option value="">Seleccionar...</option>
                            <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>Masculino</option>
                            <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>Femenino</option>
                            <option value="Otro" {{ old('genero') == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label class="text-gray-300 font-medium">Dirección</label>
                        <input type="text" name="direccion" value="{{ old('direccion') }}"
                            class="bg-gray-900 border border-gray-600 rounded-lg p-3 text-white focus:border-neon-blue focus:ring-1 focus:ring-neon-blue outline-none transition">
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="px-6 py-3 bg-neon-blue text-black font-bold rounded hover:bg-neon-blue/80 transition shadow-[0_0_15px_#00f3ff]">
                        Guardar Cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
