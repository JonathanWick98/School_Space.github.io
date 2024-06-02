<?php

// app/Http/Controllers/UsuariosController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Añadir esta línea
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        // Obtener el conteo de usuarios por rol
        $rolesCount = Usuario::select('rol', DB::raw('count(*) as total'))
                            ->groupBy('rol')
                            ->get();
        
        // Pasar los datos a la vista
        return view('Admiinfo.usuario', compact('rolesCount'));
    }

    //Vue.js
    public function show($email)
    {
        // Obtener el usuario por su correo electrónico
        $usuario = Usuario::where('email', $email)->firstOrFail();
        
        // Pasar el usuario a la vista del perfil
        return view('usuario.perfil', compact('usuario'));
    }

}
