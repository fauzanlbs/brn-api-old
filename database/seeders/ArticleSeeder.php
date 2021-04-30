<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Rinvex\Categories\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        for ($i = 1; $i < 10; $i++) {
            $category = new Category();
            $category->name = ($i . 'Test Category');
            $category->save();
        }

        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 25; $i++) {
            $r = new Article;
            $r->user_id = 1;
            $r->title = $faker->title();
            $r->content = $faker->text();
            $r->image = 'articles/1.jpeg';
            $r->date = now();
            $r->save();

            if ($i < 9) {
                $r->attachCategories($i + 1);
            } else {
                $r->attachCategories($faker->numberBetween(1, 9));
            }
        }
    }
}
