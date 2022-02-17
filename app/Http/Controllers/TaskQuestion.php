<?php

namespace App\Http\Controllers;

use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;


class TaskQuestion extends Controller
{
    use ResponseAPI;


    /**
     * Mendapatkan list data pertanyaan tugas pembelajaran berdasarkan id diklat.
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course integer required Penyortiran berdasarkan id courses. Example: 1
     *
     * @param Request $request
     *
     * @responseFile storage/responses/course-lesson-task-resource.response.json
     */
    public function get(Request $request, Course $course)
    {
        // print_r('courses task list');exit;
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum melihat komentar.');
        }

        // $coursesid = $request->query('coursesid');
        // if (!$coursesid) {
        //     return $this->responseMessage('Course ID dibutuhkan!');
        // }
        

        $tasks = DB::table('course_lesson_task_questions')
                ->join('course_lessons', 'course_lesson_task_questions.id', '=', 'course_lessons.course_lesson_id', 'left')
                ->join('courses', 'courses.id', '=', 'course_lesson_task_questions.course_id', 'left')
                ->where('courses.id', $course->id)->get();

        // $tasks = CourseLessonTaskQuestion::whereHas('courseLesson', function ($q) use ($coursesid) {
        //     $q->where('course_id', $coursesid);
        // })->get();

        return response()->json($tasks, 400);

        //return CourseLessonTaskQuestionResource::collection($tasks);
    }
}
