<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
{
    if ($user->rol === 'alumno') {
        return redirect()->route('alumnoinfo.inicio'); // Redirige a la página de inicio de los alumnos
    } elseif ($user->rol === 'profesor') {
        return redirect()->route('profesorinfo.inicio'); // Redirige a la página de inicio de los profesores
    } elseif ($user->rol === 'administrador') {
        return redirect()->route('admiinfo.inicio'); // Redirige a la página de inicio de los administradores
    } else {
        // En caso de que el rol no esté definido, puedes redirigir a una página genérica o hacer algo más
        return redirect()->route('inicio');
    }
}

}
