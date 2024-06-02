<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Alumno/Contacto.css') }}">
</head>
<body>
    <div class="overlay"></div>
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
    <div class="container">
        <!-- Sección de información de contacto -->
        <div class="contacto-container">
            <div class="contacto">
                <h2>Información de Contacto</h2>
                <p>Si necesitas asistencia personalizada, contáctanos</p>
                <!-- Información de contacto -->
                <div class="contacto-info">
                    <strong>Correo Electrónico:</strong> dr266812@gmail.com
                </div>
                <div class="contacto-info">
                    <strong>Teléfono:</strong> +503 7124 6206
                </div>
            </div>
        </div>
        <!-- Formulario de contacto -->
        <form action="/enviar-correo" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>
