<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseLessonTaskQuestion;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $course = new Course();
            $course->user_id = 1;
            $course->status = $faker->boolean() ? 'disabled' : 'enabled';
            $course->name = $i . 'Dummy Couse';
            $course->description = $faker->text(30);
            $course->save();

            for ($j = 1; $j < 8; $j++) {
                $lesson = new CourseLesson();
                $lesson->course_id = $course->id;
                $lesson->title = $j . 'Dummy Lesson';
                $lesson->description = $faker->text(15);
                $lesson->youtube_url = 'https: //www.youtube.com/watch?v=x9f3RAsNZhU&list=RDx9f3RAsNZhU&start_radio=1&ab_channel=EditraTamba';
                $lesson->save();

                $options = [];

                for ($x = 0; $x < 5; $x++) {
                    $options[$x] = [
                        'key' => $x,
                        'body' => ('option-' . ($x + 1) . ', ' . $lesson->title),
                    ];
                }

                $task = new CourseLessonTaskQuestion();
                $task->course_lesson_id = $lesson->id;
                $task->question = ('PG-' . ($i + 1) . ' lesson ' . $lesson->title . ' pilih salah satu jawaban di bawah ini!');
                $task->options = $options;
                $task->the_answer = $faker->numberBetween(0, 4);
                $task->save();
            }
        }
    }
}
