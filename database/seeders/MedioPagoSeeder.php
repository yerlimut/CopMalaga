<?php

namespace Database\Seeders;

use App\Models\MedioPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedioPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedioPago::create([
            'nombre'=>'efectivo',
            'descripcion'=>'pago en efectivo recibido'
        ]);

        
        MedioPago::create([
            'nombre'=>'targeta de creadito',
            'descripcion'=>'pago realizado mediante targeta de credito'
        ]);

         
        MedioPago::create([
            'nombre'=>'targeta debito',
            'descripcion'=>'pago inmediato y seguro con targeta debito'
        ]);
    }
}
