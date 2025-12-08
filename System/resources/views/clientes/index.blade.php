@extends('layouts.dashboard')

@section('title', 'Gestión de Clientes - ZoofiPets')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/clientes/clientes.css') }}">
<link rel="stylesheet" href="{{ asset('css/filters/clientes-filters.css') }}">
@endpush

@section('content')
<div class="clientes-management">
    <div class="page-header">
        <h1>Gestión de Clientes</h1>
        <div class="header-actions">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">
                <i class="plus-icon"></i>
                Nuevo Cliente
            </a>
        </div>
    </div>
    
    @include('filters.clientes-filters')
    
    <div class="clientes-table">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Mascotas</th>
                    <th>Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes ?? [] as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>
                        <div class="client-info">
                            <strong>{{ $cliente->nombre }}</strong>
                            <small>{{ $cliente->apellido }}</small>
                        </div>
                    </td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>
                        <span class="badge badge-info">{{ $cliente->mascotas->count() }}</span>
                    </td>
                    <td>{{ $cliente->created_at->format('d/m/Y') }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-outline">Ver</a>
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-primary">Editar</a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No hay clientes registrados</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if(isset($clientes))
    {{ $clientes->links('vendor.pagination.custom') }}
    @endif
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/clientes/clientes.js') }}"></script>
<script src="{{ asset('js/filters/clientes-filters.js') }}"></script>
@endpush