<?php

use Illuminate\Database\Seeder;
use App\models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->Azienda = $faker->lastName();
            $train->Partenza = $faker->state();
            $train->Arrivo = $faker->state();
            $train->Orario_partenza = $faker->dateTime($max = '2025-11-03 10:37:17', $timezone = null);
            $train->Orario_arrivo = $faker->dateTime($max = '2025-11-03 16:37:17', $timezone = null);
            $train->Codice_treno = $faker->numberBetween($min = 13, $max = 150);
            $train->Codice_treno = $faker->numberBetween($min = 13, $max = 150);
            $train->Numero_carrozze = $faker->numberBetween($min = 5, $max = 20);
            $train->In_orario = true;
            $train->Cancellato = false;
            $train->save();
        }
    }
}
