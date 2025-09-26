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

    protected $casts = [
        'fechaNacimiento' => 'datetime',
        'fechaRegistro' => 'datetime',
    ];

    public function nombreCompleto ()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }

    public function edadCliente ()
    {
        return floor($this->fechaNacimiento->diffInYears(now()));
    }

    public function diasRegistro ()
    {
        return floor($this->fechaRegistro->diffInDays(now()));
    }
}
