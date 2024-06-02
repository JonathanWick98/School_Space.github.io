<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Alumno/Nota.css') }}">
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
        <h2>Cuadro de Notas</h2>

        <table>
            <!-- Tabla de notas -->
            <tr>
                <th>Asignatura</th>
                <th>Trimestre 1</th>
                <th>Trimestre 2</th>
                <th>Trimestre 3</th>
            </tr>
            <tr>
                <td>Matemáticas</td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
            </tr>
            <tr>
                <td>Ciencias</td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
            </tr>
            <tr>
                <td>Lenguaje</td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
            </tr>
            <tr>
                <td>Historia</td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
                <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
            </tr>
        </table>

        <h2>Progreso del Alumno</h2>
        <div class="progress-chart">
            <div class="bar" style="width: 70%; background-color: #67b588;">Matemáticas</div>
            <div class="bar" style="width: 60%; background-color: #65a675;">Ciencias</div>
            <div class="bar" style="width: 80%; background-color: #f0ad4e;">Lenguaje</div>
            <div class="bar" style="width: 50%; background-color: #d9534f;">Historia</div>
        </div>
    </div>
</body>
</html>
