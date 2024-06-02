<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Alumno</title>
    <link rel="stylesheet" href="{{ asset('css/Alumno/Expediente.css') }}">
</head>
<body>
    <div class="overlay"></div> <!-- Overlay añadido -->
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
        <h1>Perfil del Alumno</h1>
        @if(isset($alumno))
        <div class="profile">
            <img src="{{ asset('storage/' . $alumno->Foto) }}" alt="Foto de {{ $alumno->nombre }}">
            <h2>{{ $alumno->nombre }} {{ $alumno->ApellidoPaterno }} {{ $alumno->ApellidoMaterno }}</h2>
            <div class="profile-info">
                <p>Correo: {{ $alumno->Correo }}</p>
                <p>Edad: {{ $alumno->Edad }} años</p>
                <p>Curso: {{ $alumno->Curso }}</p>
                <p>Teléfono Encargado: {{ $alumno->TelefonoEncargado }}</p>
                <p>Teléfono Casa: {{ $alumno->TelefonoCasa }}</p>
                
            </div>
        </div>
        
        @else
        <p>No se encontró información del alumno.</p>
        @endif
    </div>
</body>
</html>
