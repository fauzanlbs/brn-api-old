<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Car;
use App\Models\CarColor;
use App\Models\CarFuel;
use App\Models\CarImage;
use App\Models\CarMake;
use App\Models\CarModel;
use App\Models\CarType;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = CarColor::select('id')->get();
        $fuels = CarFuel::select('id')->get();
        $makes = CarMake::select('id')->get();
        $models = CarModel::select('id')->get();
        $types = CarType::select('id')->get();

        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 25; $i++) {
            $pn = strtoupper($faker->lexify('?')) . ' ' . $faker->numberBetween(1234, 9999) . ' ' . strtoupper($faker->lexify('??'));

            $car = new Car();
            $car->user_id = 1;
            $car->car_make_id = $faker->numberBetween(1, count($makes));
            $car->car_type_id = $faker->numberBetween(1, count($types));
            $car->car_fuel_id = $faker->numberBetween(1, count($fuels));
            $car->car_model_id = $faker->numberBetween(1, count($models));
            $car->car_color_id = $faker->numberBetween(1, count($colors));
            $car->status = $faker->randomElement(array('active', 'lost'));
            $car->is_approved = $faker->boolean();
            $car->police_number = $pn;
            $car->year = strval($faker->date('Y', now()));
            $car->isAutomatic = $faker->boolean();
            $car->capacity = $faker->numberBetween(2, 8);
            $car->save();

            for ($j = 1; $j < 3; $j++) {
                $cover = file_get_contents('https://via.placeholder.com/200.png?text=Gambar' . urlencode(' ' . $j . ' ' . $pn));
                $filename = rand() . '-' . str_replace(' ', '', $pn) . '.png';
                Storage::disk('public')->put('/cars/' . $filename, $cover);

                $ci = new CarImage();
                $ci->image = '/cars/' . $filename;

                $car->carImages()->save($ci);
            }
        }
    }
}
