<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/Maestro/acerca.css') }}">
</head>
<body>
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
        <p>En el panorama educativo actual, la integración de la tecnología se ha convertido en un componente esencial para mejorar la comunicación y la colaboración entre alumnos y profesores. En respuesta a esta necesidad, surge una aplicación móvil/web diseñada específicamente para facilitar esta interacción y optimizar el proceso educativo. Esta plataforma e-learning innovadora ofrece un espacio digital donde los estudiantes interactúan con sus profesores de manera eficiente, gestionan su asistencia, completan y entregan tareas, participan en discusiones en foros integrados y acceden a recursos relacionados con las diversas materias que forman parte de su plan de estudios. Con un enfoque centrado en la usabilidad y la accesibilidad.</p>
    </div>
</body>
</html>
