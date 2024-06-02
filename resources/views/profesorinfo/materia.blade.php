<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link rel="stylesheet" href="{{ asset('css/Maestro/Materia.css') }}">
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
        <h2>Tablero de Contenidos</h2>
        <div class="cards-container">
                <!-- Otros elementos -->
        <div class="cards-container">
        <div class="cards-container">
            <div class="card">
                <h3>Matemáticas</h3>
                <p><a href="{{ route('materias.contenido', 'matematicas') }}">Ver contenido</a></p>
            </div>

            <div class="card">
                <h3>Ciencias</h3>
                <p><a href="{{ route('materias.contenido', 'ciencias') }}">Ver contenido</a></p>
            </div>

            <div class="card">
                <h3>Lenguaje</h3>
                <p><a href="{{ route('materias.contenido', 'lenguaje') }}">Ver contenido</a></p>
            </div>

            <div class="card">
                <h3>Sociales</h3>
                <p><a href="{{ route('materias.contenido', 'sociales') }}">Ver contenido</a></p>
            </div>

            <div class="card">
                <h3>Ingles</h3>
                <p><a href="{{ route('materias.contenido', 'ingles') }}">Ver contenido</a></p>
            </div>

            <div class="card">
                <h3>Informática</h3>
                <p><a href="{{ route('materias.contenido', 'informática') }}">Ver contenido</a></p>
            </div>
        </div>

        </div>

            <!-- Agrega más divs con clase "card" según sea necesario para otras asignaturas -->
        </div>
    </div>
</body>
</html>
