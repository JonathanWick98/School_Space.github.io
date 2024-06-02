<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Filtro - School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/Admi/Adfiltro.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('css/Logo2.1.png') }}" alt="Logo de School Space" style="width: 200px;">
        </div>
        
        <a href="{{ route('admiinfo.inicio') }}">Inicio</a>
        <a href="{{ route('admiinfo.Ralumnos') }}">Registro de Alumno</a>
        <a href="{{ route('admiinfo.lista_alumnos') }}">Ver lista de alumnos</a>
        <a href="{{ route('admiinfo.Rnotas') }}">Registro de Notas</a>
        <a href="{{ route('admiinfo.Rmaestro') }}">Registro de Maestros</a>
        <a href="{{ route('admiinfo.usuario') }}">Usuarios</a>
        <a href="{{ route('admiinfo.credencial') }}">Cambio de Credencial</a>
        <a href="{{ route('admiinfo.caja') }}">Caja de Pagos</a>
        <br><br><br><br><br>
      
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>

    <div class="container">
        <h1>Resultados del Filtro</h1>
        @if ($alumnos->isEmpty())
            <p>No se encontraron alumnos para los cursos seleccionados.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Curso</th>
                        <th>Teléfono Encargado</th>
                        <th>Teléfono Casa</th>
                        <!-- Agregar más columnas si es necesario -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->ApellidoPaterno }}</td>
                            <td>{{ $alumno->ApellidoMaterno }}</td>
                            <td>{{ $alumno->Correo }}</td>
                            <td>{{ $alumno->Edad }}</td>
                            <td>{{ $alumno->Curso }}</td>
                            <td>{{ $alumno->TelefonoEncargado }}</td>
                            <td>{{ $alumno->TelefonoCasa }}</td>
                            <!-- Agregar más columnas si es necesario -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="overlay"></div>
</body>
</html>
