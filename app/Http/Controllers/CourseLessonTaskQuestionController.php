<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseLessonTaskQuestionResource;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseLessonTaskQuestion;
use Illuminate\Http\Request;

class CourseLessonTaskQuestionController extends Controller
{
    /**
     * Mendapatkan list data pertanyaan tugas pembelajaran.
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
}
