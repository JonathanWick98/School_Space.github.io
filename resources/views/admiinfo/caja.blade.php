<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    <link rel="stylesheet" href="{{ asset('css/Admi/caja.css') }}">
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
    
    <div class="main-content">
        <h1>Caja</h1>
        <div class="container">
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>Inventario</h2>
                </div>
            </a>
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>Presupuesto</h2>
                </div>
            </a>
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>Pagos</h2>
                </div>
            </a>
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>Libros</h2>
                </div>
            </a>
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>Notas</h2>
                </div>
            </a>
            <a href="#" class="link-container">
                <div class="sub-container">
                    <h2>#</h2>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
