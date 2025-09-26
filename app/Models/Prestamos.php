<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $table = 'prestamos';
    protected $fillable = [
        'idTipoPrestamo',
        'idCliente',
        'fechaSolicitud',
        'fechaAprobado',
        'fechaDesembolso',
        'idEstadoPrestamo',
        'documentoFiador',
        'valorDesembolso',
        'numeroCuotas',
        'valorCuota',
        'fechaLiquidacionPrestamo',
    ];

        public function idTipoPrestamo ()
        {
            return $this->belongsTo(TipoPrestamo::class,'idTipoPrestamo');
        }

        public function idCliente ()
        {
            return $this->belongsTo(clientes::class,'idCliente');
        }
        public function estadoPrestamo ()
        {
            return $this->belongsTo(EstadoPrestamo::class,'idEstadoPrestamo');
        }
}
