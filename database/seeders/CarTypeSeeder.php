<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_types')->insert(array(
            0 =>
            array(
                'id' => 1,
                'class' => 'Premium',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            1 =>
            array(
                'id' => 2,
                'class' => 'Middle',
                'created_at' => '2016-12-18 12:22:13',
                'updated_at' => '2016-12-18 12:22:13',
            ),
            2 =>
            array(
                'id' => 3,
                'class' => 'Compact',
                'created_at' => '2016-12-18 12:51:45',
                'updated_at' => '2016-12-18 12:51:51',
            ),
        ));
    }
}
