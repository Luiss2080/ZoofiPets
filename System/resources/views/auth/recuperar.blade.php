@extends('layouts.auth')

@section('title', 'Recuperar Contraseña - ZoofiPets')

@section('content')
<div class="recover-container">
    <div class="recover-form">
        <h2>Recuperar Contraseña</h2>
        <p>Sistema de Gestión Veterinaria ZoofiPets</p>
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Formulario de recuperación de contraseña -->
        </form>
    </div>
</div>
@endsection