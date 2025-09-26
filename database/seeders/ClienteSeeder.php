<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        $clientes = [];

        for ($i = 1; $i <= 2000; $i++) {
            $clientes[] = [
                'nombres' => $faker->firstName,
                'apellidos' => $faker->lastName,
                'tipoDocumento' => $faker->randomElement(['CC', 'TI', 'CE']),
                'numeroDocumento' => $faker->unique()->numerify('#########'),
                'telefono' => $faker->numerify('3#########'),
                'email' => $faker->unique()->safeEmail,
                'direccion' => $faker->address,
                'fechaRegistro' => now()->toDateString(),
                'fechaNacimiento' => $faker->date('Y-m-d', '2005-01-01'), // máximo 2005
                'estado' => $faker->boolean(80), // 80% activos
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('clientes')->insert($clientes);

    }
}
