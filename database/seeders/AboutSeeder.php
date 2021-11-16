<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Rinvex\Categories\Models\Category;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->title = 'title';
        $about->vesion_app = '1.0.0';
        $about->copyright = 'copyright';
        $about->histories = json_encode([
            [
                'key' => 1,
                'image' => 'dummy/1.jpeg'
            ],
            [
                'key' => 2,
                'image' => 'dummy/2.jpeg'
            ]
        ]);
        $about->organizational_regulations = json_encode([
            [
                'key' => 1,
                'image' => 'dummy/1.jpeg'
            ],
            [
                'key' => 2,
                'image' => 'dummy/2.jpeg'
            ]
        ]);
        $about->tujuh_sapta_cipta = json_encode([
            [
                'key' => 1,
                'image' => 'dummy/1.jpeg'
            ],
            [
                'key' => 2,
                'image' => 'dummy/2.jpeg'
            ]
        ]);
        $about->adarts = json_encode([
            [
                'key' => 1,
                'image' => 'dummy/1.jpeg'
            ],
            [
                'key' => 2,
                'image' => 'dummy/2.jpeg'
            ]
        ]);
        $about->organizational_structures = json_encode([
            [
                'key' => 1,
                'image' => 'dummy/1.jpeg'
            ],
            [
                'key' => 2,
                'image' => 'dummy/2.jpeg'
            ]
        ]);
        $about->playstore_url_app = 'https://playsotre......';
        $about->save();
    }
}
