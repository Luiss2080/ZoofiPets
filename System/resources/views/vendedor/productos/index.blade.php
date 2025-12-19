@extends('components.admin')

@section('title', 'Productos - ZoofiPets')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Gestión de Productos</h1>
            <p>Módulo de productos (En construcción)</p>
            <a href="{{ route('admin.productos.create') }}" class="btn btn-primary">Crear Producto</a>
        </div>
    </div>
</div>
@endsection
