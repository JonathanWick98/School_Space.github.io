<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Maestro/Inicio.css') }}">
</head>
<body>
    <div class="overlay"></div> <!-- Overlay añadido -->
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
        </div>
        
        <a href="{{ route('profesorinfo.inicio') }}">Inicio</a>
        <a href="{{ route('profesorinfo.expe') }}">Expedientes</a>
        <a href="{{ route('profesorinfo.materia') }}">Materias</a>
        <a href="{{ route('profesorinfo.nota') }}">Notas</a>
        <a href="{{ route('profesorinfo.ayuda') }}">Ayuda</a>
        <a href="{{ route('profesorinfo.contacto') }}">Contacto</a>
        <a href="{{ route('profesorinfo.acerca') }}">Acerca de Nosotros</a>
        <br><br><br><br><br>
      
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>
<div class="overlay"></div>
    <div class="container">
        <h1>Bienvenido a School Space</h1>
        <p>Tu plataforma educativa personalizada.</p>
        
        <!-- Sección de perfil del maestro -->
        <div class="profile">
            <h2>Perfil del Maestro</h2>
            <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            </div>
    </div>
</body>
</html>
