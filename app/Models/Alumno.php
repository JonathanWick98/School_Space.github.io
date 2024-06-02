<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $fillable = [
        'nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Correo',
        'Edad',
        'Curso',
        'TelefonoEncargado',
        'TelefonoCasa',
        'Foto',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'Correo', 'email');
    }
}

