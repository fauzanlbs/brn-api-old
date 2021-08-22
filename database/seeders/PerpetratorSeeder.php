<?php

namespace Database\Seeders;

use App\Models\Perpetrator;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PerpetratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 30; $i++) {
            $comment = new Perpetrator();
            $comment->nik = $faker->numberBetween(111111111, 999999999);
            $comment->name = $faker->name();
            $comment->phone_number = $faker->phoneNumber();
            $comment->address = $faker->address();
            $comment->information = $faker->text(30);;
            $comment->save();
        }
    }
}
