@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido a la Página de Inicio</h1>
    <p>Esta es la página de inicio de tu aplicación. ¡Comienza a construir cosas increíbles!</p>

    <!-- Botón para ir a la página de registro -->
    <a href="{{ route('register') }}">Registrarse</a>

    <!-- Botón para ir a la página de inicio de sesión -->
    <a href="{{ route('login') }}">Iniciar Sesión</a>
@endsection
