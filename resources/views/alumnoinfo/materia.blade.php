<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Alumno/materia.css') }}">
</head>
<body>
<div class="navbar">
    <div class="logo">
        <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
    </div>
    
    <a href="{{ route('alumnoinfo.inicio') }}">Inicio</a>
    <a href="{{ route('alumnoinfo.expe') }}">Expediente del Alumno</a>
    <a href="{{ route('alumnoinfo.nota') }}">Notas</a>
    <a href="{{ route('alumnoinfo.materia') }}">Materias</a>
    <a href="{{ route('alumnoinfo.ayuda') }}">Ayuda</a>
    <a href="{{ route('alumnoinfo.contacto') }}">Contacto</a>
    <a href="{{ route('alumnoinfo.acerca') }}">Acerca de Nosotros</a>
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
    <h2 style="color: white;">Tablero de Contenidos</h2>

    <div class="cards-container">
        <div class="card">
            <h3>Matemáticas</h3>
            <p><a href="">Ver contenido</a></p>
        </div>

        <div class="card">
            <h3>Ciencias</h3>
            <p><a href="">Ver contenido</a></p>
        </div>

        <div class="card">
            <h3>Lenguaje</h3>
            <p><a href="">Ver contenido</a></p>
        </div>

        <div class="card">
            <h3>Historia</h3>
            <p><a href="">Ver contenido</a></p>
        </div>

        <!-- Agrega más divs con clase "card" según sea necesario para otras asignaturas -->
    </div>
</div>
</body>
</html>
