@extends('layouts.auth')

@section('title', 'Login - ZoofiPets Sistema Veterinario')

@section('content')
<div class="login-container">
    <div class="login-form">
        <h2>Iniciar Sesión</h2>
        <p>Sistema de Gestión Veterinaria ZoofiPets</p>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Formulario de login para el sistema veterinario -->
        </form>
    </div>
</div>
@endsection