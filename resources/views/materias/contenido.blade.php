<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de {{ $materia }}</title>
    <link rel="stylesheet" href="{{ asset('css/Maestro/Materia.css') }}">
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
        <h2>Contenido de {{ $materia }}</h2>

        <!-- Formulario para subir archivos -->
        <form action="{{ route('materias.subirArchivo', $materia) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="archivo">Subir archivo:</label>
                <input type="file" name="archivo" id="archivo" required>
            </div>
            <button type="submit" class="btn">Subir</button>
        </form>

        <!-- Mostrar archivos subidos -->
        <h3>Archivos Subidos</h3>
        <ul>
            @foreach ($archivos as $archivo)
                <li>
                    <a href="{{ Storage::url($archivo) }}" target="_blank">{{ basename($archivo) }}</a>
                    <!-- Formulario para eliminar archivo -->
                    <form action="{{ route('materias.eliminarArchivo', [$materia, basename($archivo)]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
