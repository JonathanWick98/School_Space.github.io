<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriaController extends Controller
{
    public function contenido($materia)
    {
        // Recuperar los archivos subidos para esta materia
        $archivos = Storage::files("public/materias/$materia");

        return view('materias.contenido', compact('materia', 'archivos'));
    }

    public function subirArchivo(Request $request, $materia)
    {
        $request->validate([
            'archivo' => 'required|file|max:10240', // Máximo 10 MB
        ]);

        // Subir archivo
        $archivo = $request->file('archivo');
        $nombreArchivo = $archivo->getClientOriginalName();
        $archivo->storeAs("public/materias/$materia", $nombreArchivo);

        return redirect()->route('materias.contenido', $materia)->with('success', 'Archivo subido correctamente');
    }

    public function eliminarArchivo($materia, $archivo)
    {
        // Verificar si el archivo existe
        if (Storage::exists("public/materias/$materia/$archivo")) {
            // Eliminar el archivo
            Storage::delete("public/materias/$materia/$archivo");
            return redirect()->route('materias.contenido', $materia)->with('success', 'Archivo eliminado correctamente');
        }

        // Si el archivo no existe, redirigir con un mensaje de error
        return redirect()->route('materias.contenido', $materia)->with('error', 'El archivo no existe o ya ha sido eliminado');

}
}