<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Registro') }}</title>
    <style>
        body {
            background-color: #141325; /* Cambio de color de fondo */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #FFFCF7; /* Cambio de color del texto */
        }
        .container {
            width: 100%;
            max-width: 400px;
            background-color: #FFFCF7;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #141325; /* Cambio de color del título */
            font-size: 26px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            font-weight: bold;
            color: #141325; /* Cambio de color de las etiquetas */
            display: block;
            margin-bottom: 5px;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #65A675; /* Cambio de color del borde */
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #67B588; /* Cambio de color del botón */
            color: #FFFCF7;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        .btn-login:hover {
            background-color: #65A675; /* Cambio de color cuando se pasa el ratón sobre el botón */
        }
        .text-center {
            margin-top: 20px;
        }
        .text-center a {
            color: #E72313; /* Cambio de color del enlace */
            text-decoration: none;
            font-size: 14px;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .invalid-feedback {
            color: #E72313; /* Cambio de color del mensaje de error */
            text-align: left;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>{{ __('Registro') }}</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <label for="role">{{ __('Selecciona tu Rol') }}</label>
            <select name="role" id="role" class="form-control">                   
                <option value="profesor">Profesor</option>
                <option value="administrador">Administrador</option> 
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-login">
                {{ __('Register') }}
            </button>
        </div>
    </form><br><br>
    <div class="text-center">
        <a href="{{ route('login') }}">{{ __('Ya tienes cuenta? Iniciar Sesión') }}</a>
    </div>
</div>

</body>
</html>
