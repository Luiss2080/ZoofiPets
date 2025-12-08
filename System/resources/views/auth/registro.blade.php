@extends('layouts.auth')

@section('title', 'Registro - ZoofiPets Sistema Veterinario')

@section('content')
<div class="register-container">
    <div class="register-form">
        <h2>Registro de Usuario</h2>
        <p>Sistema de Gestión Veterinaria ZoofiPets</p>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Formulario de registro para veterinarios/staff -->
        </form>
    </div>
</div>
@endsection