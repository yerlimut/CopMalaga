<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'nombres',
        'apellidos',
        'tipoDocumento',
        'numeroDocumento',
        'telefono',
        'email',
        'direccion',
        'fechaRegistro',
        'fechaNacimiento',
        'estado',
    ];

    public function nombreCompleto ()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }
}
