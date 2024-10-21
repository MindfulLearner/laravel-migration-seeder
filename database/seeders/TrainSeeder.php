<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->time(),
                'orario_di_arrivo' => $faker->time(),
                'codice_treno' => strtoupper($faker->bothify('??###')),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(20)
            ]);
        }
    }
}
