<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Usuario;

class UniqueAdmin implements Rule
{
    public function passes($attribute, $value)
    {
        // Verifica si ya existe un usuario con el rol de administrador
        return !Usuario::where('rol', 'administrador')->exists();
    }

    public function message()
    {
        return 'Ya existe un usuario con el rol de administrador en la base de datos.';
    }
}
