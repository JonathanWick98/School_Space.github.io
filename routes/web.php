<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MateriaController;

// INDEX
Route::get('/', function () {
    return redirect()->route('login'); // Redirige a la ruta de registro
});

// Define las rutas de autenticación utilizando el método Auth::routes()
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('admiinfo.usuario');


// Profesores
Route::prefix('profesorinfo')->group(function () {
    Route::get('/', function () {
        return view('profesorinfo.inicio');
    })->name('profesorinfo.inicio');

    Route::get('/expe', function () {
        return view('profesorinfo.expe');
    })->name('profesorinfo.expe');

    Route::get('/materia', function () {
        return view('profesorinfo.materia');
    })->name('profesorinfo.materia');

    Route::get('/ayuda', function () {
        return view('profesorinfo.ayuda');
    })->name('profesorinfo.ayuda');

    Route::get('/contacto', function () {
        return view('profesorinfo.contacto');
    })->name('profesorinfo.contacto');

    Route::get('/acerca', function () {
        return view('profesorinfo.acerca');
    })->name('profesorinfo.acerca');

    Route::get('/nota', function () {
        return view('profesorinfo.nota');
    })->name('profesorinfo.nota');

    Route::get('/inforegistro', [UsuariosController::class, 'index'])->name('profesorinfo.inforegistro');

    Route::get('/materias/{materia}/contenido', [MateriaController::class, 'contenido'])->name('materias.contenido');
    Route::post('/materias/{materia}/contenido', [MateriaController::class, 'subirArchivo'])->name('materias.subirArchivo');

    Route::delete('/materia/{id}/eliminar-archivo', [MateriaController::class, 'eliminarArchivo'])->name('materia.eliminar_archivo');

    Route::delete('/materias/{materia}/eliminar-archivo/{archivo}', [MateriaController::class, 'eliminarArchivo'])
    ->name('materias.eliminarArchivo');
});

// Alumnos
Route::prefix('alumnoinfo')->group(function () {
    Route::get('/', function () {
        return view('alumnoinfo.inicio');
    })->name('alumnoinfo.inicio');

    // Ruta corregida para utilizar el controlador AlumnoController
    Route::get('/expe', [AlumnoController::class, 'show'])->name('alumnoinfo.expe')->middleware('auth');

    Route::get('/materia', function () {
        return view('alumnoinfo.materia');
    })->name('alumnoinfo.materia');

    Route::get('/ayuda', function () {
        return view('alumnoinfo.ayuda');
    })->name('alumnoinfo.ayuda');

    Route::get('/contacto', function () {
        return view('alumnoinfo.contacto');
    })->name('alumnoinfo.contacto');

    Route::get('/acerca', function () {
        return view('alumnoinfo.acerca');
    })->name('alumnoinfo.acerca');

    // Ruta para las notas de los alumnos
    Route::get('/nota', function () {
        return view('alumnoinfo.nota');
    })->name('alumnoinfo.nota');
});

// Administrador
Route::prefix('admiinfo')->group(function () {
    Route::get('/Inicio', function () {
        return view('admiinfo.inicio');
    })->name('admiinfo.inicio');

    Route::get('/Registro_de_Alumnos', function () {
        return view('admiinfo.Ralumnos');
    })->name('admiinfo.Ralumnos');

//Usuarios
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('admiinfo.usuarios');
    Route::get('/Usuarios', [UsuariosController::class, 'index'])->name('admiinfo.usuario');
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('admiinfo.usuarios');

    Route::get('/Registro_de_Notas', function () {
        return view('admiinfo.Rnotas');
    })->name('admiinfo.Rnotas');

    Route::get('/Registro_de_Maestros', function () {
        return view('admiinfo.Rmaestro');
    })->name('admiinfo.Rmaestro');

    Route::get('/Credenciales', function () {
        return view('admiinfo.credencial');
    })->name('admiinfo.credencial');

    Route::get('/Caja_de_Pago', function () {
        return view('admiinfo.caja');
    })->name('admiinfo.caja');

    // Rutas de AlumnoController
    Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
    Route::get('/lista_alumnos', [AlumnoController::class, 'index'])->name('admiinfo.lista_alumnos');
    Route::get('/alumnos/filtro', [AlumnoController::class, 'filter'])->name('alumnos.filtro');
    Route::get('/resultados_filtro', [AlumnoController::class, 'filter'])->name('resultados_filtro');
    Route::get('/Credenciales', [AlumnoController::class, 'mostrarCredenciales'])->name('admiinfo.credencial');

    //vue
    Route::get('/perfil-usuario/{email}', 'UsuarioController@show')->name('perfil.usuario');
});