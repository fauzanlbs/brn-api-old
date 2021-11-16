<?php

namespace Database\Seeders;

use App\Models\Onboarding;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class OnboardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 4; $i++) {
            $cover = file_get_contents('https://via.placeholder.com/200.png?text=Gambar' . urlencode(' ' . $i . ' ' . 'Onboarding'));
            $filename = rand() . '-' . str_replace(' ', '', $i . 'onboarding') . '.png';
            Storage::disk('public')->put('/onboardings/' . $filename, $cover);

            $on = new Onboarding();
            $on->image = '/onboardings/' . $filename;
            $on->title = 'Onboarding' . $i;
            $on->description = $faker->text(20);
            $on->order = $i;
            $on->save();
        }
    }
}
