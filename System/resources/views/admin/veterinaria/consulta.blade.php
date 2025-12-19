<x-admin>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Panel Izquierdo: Info Paciente e Historial -->
        <div class="flex flex-col gap-6">
            <!-- Tarjeta Paciente -->
            <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center text-3xl">🐶</div>
                    <div>
                        <h2 class="text-xl font-bold text-white">{{ $mascota->nombre }}</h2>
                        <p class="text-neon-blue text-sm">{{ $mascota->especie }} / {{ $mascota->sexo }}</p>
                    </div>
                </div>
                <div class="text-sm text-gray-400 space-y-1">
                    <p>Edad: {{ $mascota->edad }}</p>
                    <p>Peso anterior: {{ $mascota->peso }} kg</p>
                    <p>Dueño: {{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</p>
                </div>
            </div>

            <!-- Historial Reciente -->
            <div class="bg-gray-800/50 rounded-xl border border-gray-700 p-6 flex-1 overflow-y-auto max-h-[600px]">
                <h3 class="text-white font-bold mb-4 border-b border-gray-700 pb-2">Historial Médico</h3>
                
                @forelse($historialprevio as $hist)
                    <div class="mb-4 pb-4 border-b border-gray-700/50 last:border-0">
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>{{ $hist->fecha_consulta->format('d/m/Y') }}</span>
                            <span>Dr. {{ $hist->veterinario->nombre ?? 'N/A' }}</span>
                        </div>
                        <p class="text-neon-green font-bold text-sm">{{ $hist->diagnostico }}</p>
                        <p class="text-gray-400 text-sm mt-1 line-clamp-2">{{ $hist->tratamiento }}</p>
                        <a href="{{ route('admin.consultas.show', $hist->id) }}" class="text-xs text-neon-blue hover:underline mt-1 block">Ver Detalle</a>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm text-center italic">Sin historial previo.</p>
                @endforelse
            </div>
        </div>

        <!-- Panel Central: Formulario de Consulta -->
        <div class="lg:col-span-2 bg-gray-800/50 rounded-xl border border-gray-700 p-8 shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-white">Consulta en Curso</h1>
                <span class="text-sm bg-yellow-500/20 text-yellow-500 px-3 py-1 rounded-full animate-pulse">En Progreso</span>
            </div>

            <form action="{{ route('admin.consultas.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf
                <input type="hidden" name="mascota_id" value="{{ $mascota->id }}">
                <input type="hidden" name="cita_medica_id" value="{{ $cita->id }}">

                <!-- Signos Vitales -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-gray-300 text-sm font-bold">Peso (kg)</label>
                        <input type="number" step="0.1" name="peso" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue">
                    </div>
                    <div>
                        <label class="text-gray-300 text-sm font-bold">Temp (°C)</label>
                        <input type="number" step="0.1" name="temperatura" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue">
                    </div>
                </div>

                <!-- Evaluación -->
                <div>
                    <label class="text-gray-300 text-sm font-bold">Síntomas / Motivo</label>
                    <textarea name="sintomas" rows="2" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue">{{ $cita->motivo_consulta }}</textarea>
                </div>

                <div>
                    <label class="text-gray-300 text-sm font-bold text-neon-green">Diagnóstico *</label>
                    <textarea name="diagnostico" rows="2" required class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-greenerr"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-gray-300 text-sm font-bold">Tratamiento Aplicado</label>
                        <textarea name="tratamiento" rows="4" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue" placeholder="Procedimientos realizados en consulta..."></textarea>
                    </div>
                    <div>
                        <label class="text-gray-300 text-sm font-bold">Receta / Medicamentos</label>
                        <textarea name="medicamentos" rows="4" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue" placeholder="Medicamentos recetados para casa..."></textarea>
                    </div>
                </div>
                
                 <div>
                    <label class="text-gray-300 text-sm font-bold">Recomendaciones</label>
                    <textarea name="recomendaciones" rows="2" class="w-full bg-gray-900 border border-gray-600 rounded p-2 text-white outline-none focus:border-neon-blue"></textarea>
                </div>

                <div class="flex justify-end pt-4 border-t border-gray-700">
                    <button type="submit" class="px-8 py-3 bg-neon-green text-black font-bold rounded hover:bg-neon-green/80 transition shadow-[0_0_15px_#00ff00]">
                        Finalizar Consulta
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
