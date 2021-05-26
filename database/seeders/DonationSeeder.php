<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\DonationUser;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        $donation = Donation::create([
            'title' => 'Donasi untuk orang kurang mampu.',
            'value_target' => 1000000,
            'donated_at' => now()->addDay(),

        ]);

        for ($i = 0; $i < 10; $i++) {
            DonationUser::create([
                'donation_id' => $donation->id,
                'name' => $faker->name,
                'nominal' => $faker->numberBetween(10000, 90000),
            ]);
        }
    }
}
