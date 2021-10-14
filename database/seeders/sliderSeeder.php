<?php

namespace Database\Seeders;

use App\Models\Slider;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class sliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 10; $i++) {
            $pn = strtoupper($faker->lexify('?')) . ' ' . $faker->numberBetween(1234, 9999) . ' ' . strtoupper($faker->lexify('??'));

            for ($j = 1; $j < 3; $j++) {
                $cover = file_get_contents('https://via.placeholder.com/200.png?text=Gambar' . urlencode(' ' . $j . ' ' . $pn));
                $filename = rand() . '-' . str_replace(' ', '', $pn) . '.png';
                Storage::disk('public')->put('/sliders/' . $filename, $cover);

                $sl = new Slider();
                $sl->image = '/sliders/' . $filename;
                $sl->save();
            }
        }
    }
}
