<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseLessonTaskQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lesson_task_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_lesson_id')->constrained()->onDelete('cascade');
            $table->string('question');
            $table->json('options')->nullable();
            $table->tinyInteger('the_answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_lesson_task_questions');
    }
}
