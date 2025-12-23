<div class="table-section">
    <div class="table-responsive">
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th><i class="fas fa-user-tag"></i> CLIENTE</th>
                    <th><i class="fas fa-id-card"></i> CÉDULA</th>
                    <th><i class="fas fa-phone"></i> CONTACTO</th>
                    <th><i class="fas fa-map-marker-alt"></i> DIRECCIÓN</th>
                    <th><i class="fas fa-cogs"></i> ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $cliente)
                    <tr>
                        <td>
                            <div class="user-info">
                                <div class="avatar-circle">
                                    {{ strtoupper(substr($cliente->nombre, 0, 1) . substr($cliente->apellido, 0, 1)) }}
                                </div>
                                <div class="details">
                                    <span class="name">{{ $cliente->nombre }} {{ $cliente->apellido }}</span>
                                    <span class="role">{{ $cliente->email ?? 'Sin email' }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-id">{{ $cliente->cedula }}</span>
                        </td>
                        <td>
                            <span class="contact-info">
                                <i class="fas fa-phone-alt"></i> {{ $cliente->telefono ?? 'N/A' }}
                            </span>
                        </td>
                        <td>
                            <span class="address-text">{{ Str::limit($cliente->direccion ?? 'N/A', 30) }}</span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('recepcionista.clientes.show', $cliente->id) }}" class="btn-icon view" title="Ver Detalles">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('recepcionista.clientes.edit', $cliente->id) }}" class="btn-icon edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" 
                                        class="btn-icon delete" 
                                        onclick="confirmDelete('{{ route('recepcionista.clientes.destroy', $cliente->id) }}')" 
                                        title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                            No se encontraron clientes registrados
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="pagination-wrapper">
    {{ $clientes->appends(request()->query())->links('pages.clientes') }}
</div>
