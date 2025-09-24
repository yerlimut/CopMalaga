<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_prestamo')->insert([
            [
                'nombre' => 'Préstamo Personal',
                'descripcion' => 'Crédito de libre inversión sin necesidad de garantía.',
                'interes' => 0.15,
            ],
            [
                'nombre' => 'Préstamo Hipotecario',
                'descripcion' => 'Financiamiento para adquisición de vivienda con garantía hipotecaria.',
                'interes' => 0.08,
            ],
            [
                'nombre' => 'Préstamo Vehicular',
                'descripcion' => 'Crédito para compra de vehículo nuevo o usado.',
                'interes' => 0.10,
            ],
            [
                'nombre' => 'Préstamo Estudiantil',
                'descripcion' => 'Crédito para financiar estudios de pregrado o posgrado.',
                'interes' => 0.05,
            ],
            [
                'nombre' => 'Préstamo Empresarial',
                'descripcion' => 'Crédito dirigido a pequeñas y medianas empresas para capital de trabajo.',
                'interes' => 0.12,
            ],
        ]);
    }
}
