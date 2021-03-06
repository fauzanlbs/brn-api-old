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
            'points' => 1,
        ]);

        Point::create([
            'name' => 'Diskusi laporan kasus',
            'key' => 'discussion-case-report',
            'description' => 'Berpartisipasi di diskusi laporan kasus.',
            'points' => 5,
        ]);

        Point::create([
            'name' => 'Registrasi',
            'key' => 'register-brn',
            'description' => 'Hadiah Registrasi Di BRN.',
            'points' => 10,
        ]);

        Point::create([
            'name' => 'HUT',
            'key' => 'hut-brn',
            'description' => 'Menghadiri acara Hut BRN.',
            'points' => 10,
        ]);

        Point::create([
            'name' => 'TOUR',
            'key' => 'tour-brn',
            'description' => 'Menghadiri acara Tour BRN.',
            'points' => 10,
        ]);

        Point::create([
            'name' => 'KOPDAR',
            'key' => 'kopdar-brn',
            'description' => 'Menghadiri acara Kopdar BRN.',
            'points' => 5,
        ]);
    }
}
