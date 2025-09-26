<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPrestamo extends Model
{
    protected $table = 'EstadoPrestamo';


    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function prestamos ()
    {
        return $this->hasMany(Prestamos::class,'idEstadoPrestamo');
    }
}


