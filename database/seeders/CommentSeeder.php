<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        for ($i = 1; $i < 250; $i++) {
            $comment = new Comment();
            $comment->commentable_type = $faker->randomElement(['App\Models\Article', 'App\Models\Discussion', 'App\Models\Course', 'App\Models\CourseLesson']);;
            $comment->commentable_id = $faker->numberBetween(1, 10);
            $comment->comment = $faker->text(30);
            $comment->is_approved = true;
            $comment->user_id = 1;
            $comment->save();
        }
    }
}
