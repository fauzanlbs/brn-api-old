<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_fuels')->insert(array(
            0 =>
            array(
                'id' => 1,
                'fuel' => 'Diesel',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            1 =>
            array(
                'id' => 2,
                'fuel' => 'Gasoline',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            2 =>
            array(
                'id' => 3,
                'fuel' => 'Electric',
                'created_at' => '2016-12-18 12:50:48',
                'updated_at' => '2016-12-18 12:50:48',
            ),
            3 =>
            array(
                'id' => 4,
                'fuel' => 'Hybrid',
                'created_at' => '2016-12-18 12:50:55',
                'updated_at' => '2016-12-18 12:50:55',
            ),
        ));
    }
}
