<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Point::create([
            'name' => 'Daily Check In',
            'key' => 'daily-check-in',
            'description' => 'Check In setiap hari di aplikasi ' . config('app.name'),
            'points' => 10,
        ]);

        Point::create([
            'name' => 'Diskusi laporan kasus',
            'key' => 'discussion-case-report',
            'description' => 'Berpartisipasi di diskusi laporan kasus.',
            'points' => 50,
        ]);
    }
}
