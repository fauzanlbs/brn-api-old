<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 25; $i++) {
            $agenda = new Agenda();
            $agenda->user_id = 1;
            $agenda->area_id = $faker->numberBetween(1, 2);
            $agenda->type = $faker->randomElement(['HUT', 'TOUR', 'KOPDAR', 'UNCATEGORIZED']);
            $agenda->title = $faker->sentence($nbWords = 8, $variableNbWords = true);
            $agenda->description = $faker->sentence($nbWords = 18, $variableNbWords = true);
            $agenda->start_date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = '2021-06-12', $timezone = null);
            $agenda->end_date = $faker->dateTimeBetween($startDate = 'now', $endDate = '2021-12-12', $timezone = null);
            $agenda->start_time = $faker->randomElement(['07:00', '09:40', '8:00']);
            $agenda->end_time =  $faker->randomElement(['15:00', '13:20', '20:00']);
            $agenda->latitude = 31.2467601;
            $agenda->longitude = 29.9020376;
            $agenda->address = $faker->address;
            $agenda->save();
        }
    }
}
