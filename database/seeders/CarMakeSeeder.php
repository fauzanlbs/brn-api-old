<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_makes')->insert(array(
            0 =>
            array(
                'id' => 1,
                'make' => 'Audi',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            1 =>
            array(
                'id' => 2,
                'make' => 'VW',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            2 =>
            array(
                'id' => 3,
                'make' => 'BMW',
                'created_at' => '2016-12-18 12:27:51',
                'updated_at' => '2016-12-18 12:27:51',
            ),
            3 =>
            array(
                'id' => 4,
                'make' => 'Volvo',
                'created_at' => '2016-12-18 12:27:54',
                'updated_at' => '2016-12-18 12:27:54',
            ),
            4 =>
            array(
                'id' => 5,
                'make' => 'Toyota',
                'created_at' => '2016-12-18 12:28:03',
                'updated_at' => '2016-12-18 12:28:03',
            ),
        ));
    }
}
