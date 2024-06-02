<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('css/fondo.gif'); /* Ruta relativa al archivo de imagen */
            background-size: cover; /* Para que el fondo cubra toda la pantalla */
            color: #FFFCF7; /* Color del texto */
            display: flex;
        }

        .navbar {
            background-color: #141325;
            color: #fff;
            padding: 10px 20px;
            text-align: left;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            min-height: 100vh; /* Mínimo tamaño de la pantalla */
            width: 250px; /* Ancho fijo para la barra lateral */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 10px;
            margin: 5px; /* Margen para evitar que el color de fondo se salga */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: calc(100% - 10px); /* Ocupar todo el ancho menos el margen */
            text-align: left;
            display: block; /* Mostrar en cascada */
        }

        .navbar a:hover {
            background-color: #65a675;
        }

        .container {
            flex: 1; /* Hacer que el container ocupe todo el espacio restante */
            margin: 50px auto auto; /* Ajuste del margen superior para evitar superposición con el navbar */
            text-align: center;
            background-color: rgba(20, 19, 37, 0.9); /* Color del contenedor de texto con transparencia */
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: #67b588;
        }

        p {
            color: #ffffff;
            font-size: 18px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #65a675;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #67b588;
        }

        .logo {
            text-align: center;
            padding: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        table {
            width: 80%; /* Reducimos el ancho del cuadro de notas */
            border-collapse: collapse;
            margin: auto; /* Centramos la tabla horizontalmente */
            background-color: #ffffff; /* Cambiamos el color de fondo del cuadro de notas */
            border-radius: 10px; /* Agregamos bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Agregamos sombra */
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 12px; /* Aumentamos el espacio interno de las celdas */
            text-align: left;
            font-size: 16px; /* Reducimos el tamaño de la fuente */
            color: #67b588; /* Cambiamos el color del texto dentro del cuadro de notas */
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
    <div class="container">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro de Notas de: </title>
</head>
<body>

<h2>Cuadro de Notas</h2>

<table>
  <tr>
    <th>Asignatura</th>
    <th>Trimestre 1</th> <!-- Cambiamos la etiqueta de la columna de Nota -->
    <th>Trimestre 2</th> <!-- Agregamos una columna para el segundo trimestre -->
    <th>Trimestre 3</th> <!-- Agregamos una columna para el tercer trimestre -->
  </tr>
  <tr>
    <td>Matemáticas</td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td>
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td> <!-- Agregamos inputs para el segundo trimestre -->
    <td><input type="number" min="0" max="10" step="0.1" value="0"></td> <!-- Agregamos inputs para el tercer trimestre -->
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
  <!-- Añade más filas según sea necesario para otras asignaturas -->
</table>

</body>
</html>
