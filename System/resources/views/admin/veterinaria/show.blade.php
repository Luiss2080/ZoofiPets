<x-admin>
    <div class="max-w-4xl mx-auto flex flex-col gap-6">
        <div class="flex justify-between items-center print:hidden">
            <h1 class="text-3xl font-bold text-white">Detalle Historial Médico</h1>
            <div class="flex gap-2">
                <button onclick="window.print()" class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition">
                    Imprimir Informe
                </button>
                <a href="{{ route('admin.consultas.index') }}" class="px-4 py-2 bg-gray-800 text-gray-300 rounded hover:bg-gray-700 transition">
                    Volver a Agenda
                </a>
            </div>
        </div>

        <div class="bg-white text-black p-8 rounded-xl shadow-lg print:shadow-none print:w-full">
            <!-- Encabezado Clínica -->
            <div class="flex justify-between items-start border-b border-gray-300 pb-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold uppercase tracking-widest text-gray-800">ZoofiPets</h2>
                    <p class="text-sm text-gray-600">Historia Clínica Veterinaria</p>
                </div>
                <div class="text-right">
                    <h3 class="font-bold text-xl text-gray-700">Folio: #{{ str_pad($historial->id, 6, '0', STR_PAD_LEFT) }}</h3>
                    <p class="text-sm text-gray-500">Fecha: {{ $historial->fecha_consulta->format('d/m/Y H:i') }}</p>
                    <p class="text-sm text-gray-500">Vet: {{ $historial->veterinario->nombre ?? 'N/A' }}</p>
                </div>
            </div>

            <!-- Datos Paciente -->
            <div class="bg-gray-100 p-4 rounded mb-6 flex justify-between">
                <div>
                    <p class="font-bold text-gray-800 text-lg">{{ $historial->mascota->nombre }}</p>
                    <p class="text-sm text-gray-600">{{ $historial->mascota->especie }} - {{ $historial->mascota->raza }}</p>
                </div>
                <div class="text-right">
                    <p class="text-sm"><span class="font-bold">Peso:</span> {{ $historial->peso }} kg</p>
                    <p class="text-sm"><span class="font-bold">Temp:</span> {{ $historial->temperatura }} °C</p>
                </div>
            </div>

            <!-- Sección Médica -->
            <div class="space-y-6">
                <div>
                    <h4 class="font-bold text-gray-700 border-b border-gray-300 mb-2 uppercase text-xs">Diagnóstico</h4>
                    <p class="text-gray-800 bg-blue-50 p-3 rounded border border-blue-100">{{ $historial->diagnostico }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-bold text-gray-700 border-b border-gray-300 mb-2 uppercase text-xs">Síntomas Reportados</h4>
                        <p class="text-gray-600 text-sm">{{ $historial->sintomas ?? 'No registrados' }}</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-gray-700 border-b border-gray-300 mb-2 uppercase text-xs">Tratamiento Aplicado</h4>
                    <p class="text-gray-800 whitespace-pre-line">{{ $historial->tratamiento ?? 'N/A' }}</p>
                </div>

                <div>
                    <h4 class="font-bold text-gray-700 border-b border-gray-300 mb-2 uppercase text-xs">Récipes / Medicamentos</h4>
                    <div class="border border-gray-300 rounded p-4 relative">
                        <span class="absolute -top-3 left-2 bg-white px-2 text-xs font-bold text-gray-500">RECETA MÉDICA</span>
                        <p class="text-gray-800 font-mono whitespace-pre-line">{{ $historial->medicamentos ?? 'Ninguno' }}</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-gray-700 border-b border-gray-300 mb-2 uppercase text-xs">Recomendaciones</h4>
                    <p class="text-gray-800">{{ $historial->recomendaciones ?? 'N/A' }}</p>
                </div>
            </div>

            @if($historial->proxima_cita)
                <div class="mt-8 text-center p-4 border border-blue-200 bg-blue-50 rounded">
                    <p class="font-bold text-blue-800">Próxima Visita Sugerida</p>
                    <p class="text-xl text-blue-600">{{ $historial->proxima_cita->format('d/m/Y') }}</p>
                </div>
            @endif

            <!-- Footer Firma -->
            <div class="mt-16 flex justify-between items-end pt-8">
                <div class="text-xs text-gray-400">
                    <p>Documento generado digitalmente por ZoofiPets System.</p>
                </div>
                <div class="text-center border-t border-gray-400 px-8 pt-2">
                    <p class="font-bold text-gray-700 text-sm">{{ $historial->veterinario->nombre ?? 'Veterinario' }}</p>
                    <p class="text-xs text-gray-500">Firma Médico Veterinario</p>
                </div>
            </div>
        </div>
    </div>
</x-admin>
