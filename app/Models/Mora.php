<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mora extends Model
{
     protected $table = 'Mora';


    protected $fillable = [
        'fechaInicial',
        'fechaFinal',
        'valorMora',
        'observaciones',
        'estadoMora'

    ];
}
