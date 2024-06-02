<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos - School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/Admi/Lalumnos.css') }}">
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
    <div class="overlay"></div>
    <div class="alumnos-container"> <!-- Cambiado de "container" a "alumnos-container" -->
        <h1>Lista de Alumnos</h1>
        <form method="GET" action="{{ route('alumnos.filtro') }}">
            @csrf
            <label for="Curso">Seleccionar curso:</label>
            <select name="Curso" id="Curso">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
            </select>
            <button type="submit">Buscar</button>
        </form>
        @if ($alumnos->isEmpty())
            <p>No se encontraron alumnos para el curso seleccionado.</p>
        @else
        <div class="alumnos-table-container"> <!-- Cambiado de "table-container" a "alumnos-table-container" -->
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
                    @if ($alumnos != null && count($alumnos) > 0)
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
                    @else
                        <tr>
                            <td colspan="8">No se encontraron alumnos.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @endif
    </div>
</body>
</html>
