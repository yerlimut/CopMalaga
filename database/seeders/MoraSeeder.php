<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;   
use Faker\Factory as Faker;

class MoraSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $Mora = [];

        for ($i = 1; $i <= 1000; $i++) {
            $Mora[] = [
                'fechaInicial'  => $faker->date('Y-m-d'),
                'fechaFinal'    => $faker->date('Y-m-d'),
                'valorMora'     => $faker->randomFloat(2, 10000, 500000),
                'observaciones' => $faker->sentence,
                'estadoMora'    => $faker->randomElement(['paga', 'pendiente']),
            ];
        }

        DB::table('Mora')->insert($Mora); 
    }
}
