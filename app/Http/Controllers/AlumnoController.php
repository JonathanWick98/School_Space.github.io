<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AlumnoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'ApellidoPaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Correo' => 'required|email|max:255',
            'Foto' => 'required|image|mimes:jpeg,png,jpg',
            'Edad' => 'required|integer',
            'Curso' => 'required|string|max:255',
            'TelefonoEncargado' => 'required|string|max:255',
            'TelefonoCasa' => 'required|string|max:255',
        ]);

        // Procesar y almacenar los datos en la base de datos
        $alumno = new Alumno();
        $alumno->nombre = $request->input('Nombre');
        $alumno->ApellidoPaterno = $request->input('ApellidoPaterno');
        $alumno->ApellidoMaterno = $request->input('ApellidoMaterno');
        $alumno->Correo = $request->input('Correo');

        // Almacenar la foto en el sistema de archivos
        if ($request->hasFile('Foto')) {
            $alumno->Foto = $request->file('Foto')->store('imagenes', 'public');
        }

        $alumno->Edad = $request->input('Edad');
        $alumno->Curso = $request->input('Curso');
        $alumno->TelefonoEncargado = $request->input('TelefonoEncargado');
        $alumno->TelefonoCasa = $request->input('TelefonoCasa');
        $alumno->save();

        // Crear un nuevo usuario en la tabla 'usuarios'
        $usuario = new Usuario();
        $usuario->name = $request->input('Nombre');
        $usuario->email = $request->input('Correo');

        // Generar una contraseña usando el nombre y un sufijo único
        $suffix = "SS" . str_pad((Usuario::count() + 1), 2, '0', STR_PAD_LEFT);
        $password = $request->input('Nombre') . $suffix;
        $usuario->password = Hash::make($password);

        // Asignar un rol, por ejemplo 'alumno'
        $usuario->rol = 'alumno';

        $usuario->save();

        // Crear el contenido del archivo de texto
        $fileContent = "ID: {$usuario->id}\n";
        $fileContent .= "Nombre: {$usuario->name}\n";
        $fileContent .= "Correo: {$usuario->email}\n";
        $fileContent .= "Contraseña: $password\n";
        $fileContent .= "Rol: {$usuario->rol}\n";

        // Crear el archivo de texto y forzar la descarga
        $fileName = "usuario_{$usuario->id}.txt";
        $headers = [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ];

        return response($fileContent, 200, $headers);
    }



    public function index()
    {
        $alumnos = Alumno::all();
        return view('admiinfo.lista_alumnos', ['alumnos' => $alumnos]);
    }


// - - - - -- - - - - -- - - - - - - -- - - - - - - - - - - - - -- - - - - - - - - - - -- - - - - - - - - - - - - - - - - --  
    public function filter(Request $request)
    {
        // Obtener el curso seleccionado del parámetro de consulta
        $curso = $request->input('Curso');

        // Verificar si se seleccionó un curso válido
        if (!in_array($curso, ['A1', 'A2', 'B1', 'B2'])) {
            // Si el curso no es válido, redirigir con un mensaje de error
            return redirect()->route('admiinfo.lista_alumnos')->with('error', 'El curso seleccionado no es válido.');
        }

        // Obtener los alumnos filtrados por el curso seleccionado
        $alumnos = Alumno::where('Curso', $curso)->get();

        return view('admiinfo.resultados_filtro', ['alumnos' => $alumnos]);
    }


// - - - - -- - - - - -- - - - - - - -- - - - - - - - - - - - - -- - - - - - - - - - - -- - - - - - - - - - - - - - - - - --    
    public function mostrarCredenciales()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = Usuario::all();
    
        // Pasar los datos de los usuarios a la vista
        return view('admiinfo.credencial', ['usuarios' => $usuarios]);
    }


// - - - - -- - - - - -- - - - - - - -- - - - - - - - - - - - - -- - - - - - - - - - - -- - - - - - - - - - - - - - - - - --  

    public function show()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener el alumno asociado al usuario autenticado
        $alumno = $user->alumno;

        // Pasar los datos del alumno a la vista
        return view('alumnoinfo.expe', ['alumno' => $alumno]);
    }


// - - - - - -- - - - - - -- - - - - - - - - -- - - - - - --- - -- - -  - - -- - -  -  - -  - -  -  -  - 

}