<?php

namespace Database\Seeders;

use App\Models\EstadoPrestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoPrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoPrestamo::create([
            'nombre'=>'Solicitado',
            'descripcion'=>'el usuario ha pedido un préstamo y está en espera de aprobación.'
        ]);

         EstadoPrestamo::create([
            'nombre'=>'En analisis',
            'descripcion'=>'la solicitud está siendo revisada antes de aprobarse o rechazarse'
        ]);
       
        EstadoPrestamo::create([
            'nombre'=>'aprobado',
            'descripcion'=>'la solicitud fue aceptada y el préstamo está autorizado.'
        ]);

    }
}
