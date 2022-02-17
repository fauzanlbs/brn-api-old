<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseLessonTaskQuestionResource;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseLessonTaskQuestion;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CourseLessonTaskQuestionController extends Controller
{
    use ResponseAPI;

    /**
     * Mendapatkan list data pertanyaan per 1 tugas pembelajaran.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course int required valid id course. Example: 1
     * @urlParam courseLesson int required valid id courseLesson. Example: 1
     *
     * @param Request $request
     * @param Course $course
     * @param CourseLesson $courseLesson
     *
     * @return CourseLessonTaskQuestionResource
     *
     * @responseFile storage/responses/course-lesson-task-resource.response.json
     */
    public function getCourseLessonTaskQuestions(Request $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum melihat komentar.');
        }


        $tasks = CourseLessonTaskQuestion::where('course_lesson_id', $courseLesson->id)->get();

        return CourseLessonTaskQuestionResource::collection($tasks);
    }



    /**
     * Mendapatkan list data pertanyaan tugas pembelajaran berdasarkan id diklat.
     * @authenticated
     *
     * @group Kursus
     *
     * @queryParam coursesid integer required Penyortiran berdasarkan id courses. Example: 1
     *
     * @param Request $request
     *
     *
     * @responseFile storage/responses/course-lesson-task-resource.response.json
     */
    public function getCourseLessonTaskQuestionWhereLevel(Request $request, Course $course)
    {
        print_r('courses task list');exit;
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum melihat komentar.');
        }

        $coursesid = $request->query('coursesid');
        if (!$coursesid) {
            return $this->responseMessage('Course ID dibutuhkan!');
        }
        

        $tasks = DB::table('course_lesson_task_questions')
                ->join('course_lessons', 'course_lesson_task_questions.id', '=', 'course_lessons.course_lesson_id', 'left')
                ->join('courses', 'courses.id', '=', 'course_lesson_task_questions.course_id', 'left')
                ->where('courses.id', $coursesid)->get();

        // $tasks = CourseLessonTaskQuestion::whereHas('courseLesson', function ($q) use ($coursesid) {
        //     $q->where('course_id', $coursesid);
        // })->get();

        return response()->json($tasks, 400);

        //return CourseLessonTaskQuestionResource::collection($tasks);
    }
}
