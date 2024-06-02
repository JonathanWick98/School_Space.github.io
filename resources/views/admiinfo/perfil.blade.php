<!-- resources/views/perfil.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <!-- Aquí puedes incluir tus estilos CSS si los tienes -->
</head>
<body>

<h1>Perfil de Usuario</h1>

<div>
    <p><strong>Correo electrónico:</strong> {{ $usuario->email }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
    <p><strong>Rol:</strong> {{ $usuario->rol }}</p>
</div>

</body>
</html>
