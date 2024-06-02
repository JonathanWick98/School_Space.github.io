<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
        <h1>Bienvenido a School Space</h1>
        <p>Bienvenido {{ Auth::user()->name }}. Esta es tu plataforma educativa personalizada.</p>
        <p>Aquí puedes acceder a tus cursos, materiales de estudio y participar en actividades educativas.</p>
        <a href="#" class="btn">Explorar</a>
    </div>
</body>
</html>
