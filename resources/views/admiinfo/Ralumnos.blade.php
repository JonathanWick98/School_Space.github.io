<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a School Space</title>
    
    <link rel="stylesheet" href="{{ asset('css/Admi/Ralumnos.css') }}">
</head>
<body>
    <div class="new-navbar">
        <div class="new-logo">
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

    <div class="new-blue-container">
        <h1 class="new-title">Registro de Alumno</h1>
        <div class="new-container">
            <form method="POST" action="{{ route('alumnos.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="new-form-group">
                    <label for="Nombre">{{ __('Nombre') }}</label>
                    <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') }}" required autocomplete="Nombre" autofocus>
                    @error('Nombre')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="ApellidoPaterno">{{ __('Apellido Paterno') }}</label>
                    <input id="ApellidoPaterno" type="text" class="form-control @error('ApellidoPaterno') is-invalid @enderror" name="ApellidoPaterno" value="{{ old('ApellidoPaterno') }}" required autocomplete="ApellidoPaterno">
                    @error('ApellidoPaterno')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="ApellidoMaterno">{{ __('Apellido Materno') }}</label>
                    <input id="ApellidoMaterno" type="text" class="form-control @error('ApellidoMaterno') is-invalid @enderror" name="ApellidoMaterno" value="{{ old('ApellidoMaterno') }}" required autocomplete="ApellidoMaterno">
                    @error('ApellidoMaterno')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="Correo">{{ __('Correo') }}</label>
                    <input id="Correo" type="email" class="form-control @error('Correo') is-invalid @enderror" name="Correo" value="{{ old('Correo') }}" required autocomplete="Correo">
                    @error('Correo')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="Foto">{{ __('Foto') }}</label>
                    <input type="file" name="Foto" accept="image/*">
                    @error('Foto')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="Edad">{{ __('Edad') }}</label>
                    <input id="Edad" type="text" class="form-control @error('Edad') is-invalid @enderror" name="Edad" value="{{ old('Edad') }}" required autocomplete="Edad">
                    @error('Edad')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="Curso">{{ __('Curso') }}</label>
                    <select id="Curso" class="form-control @error('Curso') is-invalid @enderror" name="Curso" required autocomplete="Curso">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                    </select>
                    @error('Curso')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="TelefonoEncargado">{{ __('Telefono de encargado') }}</label>
                    <input id="TelefonoEncargado" type="text" class="form-control @error('TelefonoEncargado') is-invalid @enderror" name="TelefonoEncargado" value="{{ old('TelefonoEncargado') }}" required autocomplete="TelefonoEncargado">
                    @error('TelefonoEncargado')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="new-form-group">
                    <label for="TelefonoCasa">{{ __('Telefono de casa') }}</label>
                    <input id="TelefonoCasa" type="text" class="form-control @error('TelefonoCasa') is-invalid @enderror" name="TelefonoCasa" value="{{ old('TelefonoCasa') }}" required autocomplete="TelefonoCasa">
                    @error('TelefonoCasa')
                        <span class="new-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="new-btn">
                    {{ __('Agregar') }}
                </button>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
</body>
</html>
