<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Maestro/Ayuda.css') }}">
</head>
<body>
    <div class="overlay"></div>
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
    <div class="container">
<div class="overlay"></div>
        <h1>Preguntas Frecuentes</h1>

        <div class="search-container">
            <form action="/buscar" method="GET">
                <input type="text" placeholder="Buscar en preguntas frecuentes..." name="q">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <div class="faq">
            <h2>¿Cómo creo una cuenta?</h2>
            <p>Para crear una cuenta, haz clic en el enlace "Registrarse" en la página de inicio.</p>
        </div>

        <div class="faq">
            <h2>¿Cómo cambio mi contraseña?</h2>
            <p>Para cambiar tu contraseña, ve a la sección "Configuración de la cuenta" en tu perfil.</p>
        </div>
        
        <div class="faq">
            <h2>¿Cómo accedo a los cursos disponibles en la aplicación?</h2>
            <p>Para acceder a los cursos disponibles en nuestra aplicación, simplemente inicia sesión en tu cuenta y navega a la sección de "Cursos". Aquí encontrarás una lista de todos los cursos disponibles organizados por categorías. Puedes hacer clic en un curso para obtener más detalles y comenzar a aprender.</p>
        </div>
    </div>
</body>
</html>
