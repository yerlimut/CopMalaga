<?php

namespace Database\Seeders;

use App\Models\Prestamos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

    $prestamos = [];

    for ($i = 1; $i <= 2000; $i++) {
        // Fechas lógicas
        $fechaSolicitud = $faker->dateTimeBetween('-6 months', 'now');
        $fechaAprobado = (clone $fechaSolicitud)->modify('+' . $faker->numberBetween(1, 10) . ' days');
        $fechaDesembolso = (clone $fechaAprobado)->modify('+' . $faker->numberBetween(1, 5) . ' days');

        // Valores de préstamo
        $numeroCuotas = $faker->numberBetween(1, 36);
        $valorDesembolso = $faker->numberBetween(1000, 1000000);

        $prestamos[] = [
            'idTipoPrestamo' => $faker->randomElement([1, 2, 3, 4, 5]),
            'idCliente' => $faker->numberBetween(1, 2000),
            'fechaSolicitud' => $fechaSolicitud->format('Y-m-d'),
            'fechaAprobado' => $fechaAprobado->format('Y-m-d'),
            'fechaDesembolso' => $fechaDesembolso->format('Y-m-d'),
            'idEstadoPrestamo' => $faker->randomElement([1, 2, 3]),
            'documentoFiador' => $faker->unique()->numerify('#########'),
            'valorDesembolso' => $valorDesembolso,
            'numeroCuotas' => $numeroCuotas,
            'valorCuota' => round($valorDesembolso / $numeroCuotas, 2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    DB::table('prestamos')->insert($prestamos);
}
}
