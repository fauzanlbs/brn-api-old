<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseLessonTaskQuestionResource;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseLessonTaskQuestion;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;

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
     * Mendapatkan list data pertanyaan tugas pembelajaran berdasarkan level diklat.
     * @authenticated
     *
     * @group Kursus
     *
     * @queryParam level string required Penyortiran berdasarkan judul. Example: Marketing Di Social Media
     *
     * @param Request $request
     *
     * @return CourseLessonTaskQuestionResource
     *
     * @responseFile storage/responses/course-lesson-task-resource.response.json
     */
    public function getCourseLessonTaskQuestionWhereLevel(Request $request)
    {
        $level = $request->query('level');
        if (!$level) {
            return $this->responseMessage('Level diklat tidak boleh');
        }

        $tasks = CourseLessonTaskQuestion::whereHas('courseLesson', function ($q) use ($level) {
            $q->whereHas('course', function ($qq) use ($level) {
                $qq->where('level', $level);
            });
        })->get();

        return response()->json($tasks, 400);

        return CourseLessonTaskQuestionResource::collection($tasks);
    }
}
