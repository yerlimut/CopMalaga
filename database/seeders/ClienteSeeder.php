<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
    [
        'nombres' => 'Juan',
        'apellidos' => 'Pérez',
        'tipoDocumento' => 'CC',
        'numeroDocumento' => '123456789',
        'telefono' => '3001234567',
        'email' => 'juan@example.com',
        'direccion' => 'Calle 123',
        'fechaRegistro' => now()->toDateString(),
        'fechaNacimiento' => '1990-05-15',
        'estado' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombres' => 'María',
        'apellidos' => 'Gómez',
        'tipoDocumento' => 'CC',
        'numeroDocumento' => '987654321',
        'telefono' => '3017654321',
        'email' => 'maria@example.com',
        'direccion' => 'Carrera 45',
        'fechaRegistro' => now()->toDateString(),
        'fechaNacimiento' => '1992-08-10',
        'estado' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombres' => 'Carlos',
        'apellidos' => 'Rodríguez',
        'tipoDocumento' => 'TI',
        'numeroDocumento' => '1122334455',
        'telefono' => '3021122334',
        'email' => 'carlos@example.com',
        'direccion' => 'Avenida Siempre Viva 742',
        'fechaRegistro' => now()->toDateString(),
        'fechaNacimiento' => '1985-03-22',
        'estado' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nombres' => 'Laura',
        'apellidos' => 'Martínez',
        'tipoDocumento' => 'CC',
        'numeroDocumento' => '5566778899',
        'telefono' => '3045566778',
        'email' => 'laura@example.com',
        'direccion' => 'Calle Principal 100',
        'fechaRegistro' => now()->toDateString(),
        'fechaNacimiento' => '1995-07-30',
        'estado' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    ]);
    }
}
