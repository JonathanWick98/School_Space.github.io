<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login') }}</title>
    <style>
        body {
            background-color: #141325;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #FFFCF7;
        }
        .container {
            width: 100%;
            max-width: 400px;
            background-color: #FFFCF7;
            padding: 40px 20px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .logo {
            margin-bottom: 30px;
        }
        .logo img {
            width: 250px;
        }
        .container h2 {
            margin-bottom: 30px;
            color: #141325;
            font-size: 24px;
        }
        .form-group label {
            font-weight: bold;
            color: #141325;
            text-align: left;
            display: block;
            margin-bottom: 8px;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #65A675;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #67B588;
            color: #FFFCF7;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover {
            background-color: #65A675;
        }
        .text-center a {
            color: #E72313;
            text-decoration: none;
            font-size: 14px;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .form-check {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-check-input {
            margin-right: 10px;
        }
        .form-check-label {
            color: #141325;
            font-size: 14px;
        }
        .invalid-feedback {
            color: #E72313;
            text-align: left;
            display: block;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="{{ asset('css/Logo3.png') }}" alt="Logo de School Space">
    </div>
    <h2>{{ __('Login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-login">{{ __('Login') }}</button>
        </div>

        <div class="text-center">
            <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
        </div>
    </form>
</div>

</body>
</html>
