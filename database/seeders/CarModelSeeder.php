<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert(array(
            0 =>
            array(
                'id' => 1,
                'car_make_id' => 1,
                'model' => 'A4',
                'created_at' => '2016-12-18 12:49:26',
                'updated_at' => '2016-12-18 12:49:26',
            ),
            1 =>
            array(
                'id' => 2,
                'car_make_id' => 2,
                'model' => 'Polo',
                'created_at' => '2016-12-18 12:49:42',
                'updated_at' => '2016-12-18 12:49:42',
            ),
            2 =>
            array(
                'id' => 3,
                'car_make_id' => 2,
                'model' => 'Up!',
                'created_at' => '2016-12-18 12:49:47',
                'updated_at' => '2016-12-18 12:49:47',
            ),
            3 =>
            array(
                'id' => 4,
                'car_make_id' => 3,
                'model' => '118d',
                'created_at' => '2016-12-18 12:49:55',
                'updated_at' => '2016-12-18 12:49:55',
            ),
            4 =>
            array(
                'id' => 5,
                'car_make_id' => 4,
                'model' => 'S40',
                'created_at' => '2016-12-18 12:50:01',
                'updated_at' => '2016-12-18 12:50:01',
            ),
            5 =>
            array(
                'id' => 6,
                'car_make_id' => 4,
                'model' => 'S40',
                'created_at' => '2016-12-18 12:50:24',
                'updated_at' => '2016-12-18 12:50:24',
            ),
            6 =>
            array(
                'id' => 7,
                'car_make_id' => 5,
                'model' => 'Yaris',
                'created_at' => '2016-12-18 12:50:34',
                'updated_at' => '2016-12-18 12:50:34',
            ),
        ));
    }
}
