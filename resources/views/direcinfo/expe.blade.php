<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/ayuda.css') }}">
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
    <title>Perfil del Alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #67b588;
        }
        .profile {
            margin-top: 20px;
            text-align: center;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile h2 {
            margin-top: 10px;
            font-size: 24px;
            color: #333;
        }
        .profile p {
            margin: 5px 0;
            font-size: 16px;
            color: #666;
        }
        .profile-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .profile-info p {
            flex: 1;
            margin: 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perfil del Alumno</h1>
        <div class="profile">
            <img src="https://via.placeholder.com/150" alt="Foto de perfil">
            <h2>Nombre del Profesor</h2>
            <h3 style="color: black;">{{ Auth::user()->name }}</h3>
            <div class="profile-info">
                <p>Curso: 1º de Bachillerato</p>
                <p>Edad: 17 años</p>
                <!-- Puedes agregar más información del perfil aquí -->
            </div>
        </div>
        <a href="#" class="button">Cerrar sesión</a>
    </div>
</body>
</html>   
    </div>
</body>
</html>
