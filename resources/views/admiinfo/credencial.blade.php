<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credenciales de Usuario - School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/Admi/Credencial.css') }}">
</head>
<body>
<div class="overlay"></div> <!-- Capa opaca -->
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
    <h2>Lista de Usuarios</h2>
    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ substr($usuario->password, 0, 8) }}...</td>
                    <td>{{ $usuario->rol }}</td>
                    <td>
                    <button @click="showModal('{{ route('perfil.usuario', $usuario->email) }}')" class="btn btn-primary">Ver</button>
                        <a href="" class="btn btn-warning">Editar</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
