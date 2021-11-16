<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Area();
        $row->region_id = 1;
        $row->area = 'Tasikmalaya';
        $row->save();

        $row = new Area();
        $row->region_id = 1;
        $row->area = 'Bandung';
        $row->save();
    }
}
