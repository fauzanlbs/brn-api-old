<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\CourseLessonResource;
use App\Http\Resources\LikeResource;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\Like;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kursus
 */
class CourseLessonController extends Controller
{
    use ResponseAPI;

    /**
     * Mendapatkan list data pembelajaran/video kursus.
     * Dibagian ini Anda bisa mendapatkan list data pembelajaran/video kursus.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam search string Mencari data pembelajaran/video kursus. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Request $request
     *
     * @return CourseLessonResource
     *
     * @responseFile storage/responses/course-lesson-resource.response.json
     */
    public function getCourseLessons(Request $request, Course $course)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus ini terlebih dahulu sebelum melihat pembelajaran/video kursus ini.');
        }

        $search = $request->query('search');

        $allowed = [
            'created_at', 'name', 'description',
        ];

        $courses = QueryBuilder::for(CourseLesson::class)
            ->where('course_id', $course->id)
            ->withCount(['likes', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CourseLessonResource::collection($courses);
    }


    /**
     * Mendapatkan list data komentar pembelajaran/video kursus.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam course int required valid id course. Example: 1
     * @urlParam courseLesson int required valid id courseLesson. Example: 1
     *
     * @param Course $course
     * @param CourseLesson $courseLesson
     * @return CommentResource
     *
     * @responseFile storage/responses/comment-resource.response.json
     */
    public function getCourseLessonComments(Request $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum melihat komentar.');
        }

        $comments = Comment::with('commentator')
            ->withCount(['likes', 'replies'])
            ->where("commentable_type", "App\Models\CourseLesson")
            ->where("commentable_id", $courseLesson->id)
            ->jsonPaginate();

        return CommentResource::collection($comments);
    }


    /**
     * Mendapatkan list data user yang menyukai pembelajaran/video kursus.
     * <aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
     * @authenticated
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam course int required valid id course. Example: 1
     * @urlParam courseLesson int required valid id courseLesson. Example: 1
     *
     * @param Course $course
     * @param CourseLesson $courseLesson
     * @return LikeResource
     *
     * @responseFile storage/responses/like-resource.response.json
     */
    public function getCourseLessonLikes(Request $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum melihat pengguna yang menyukai pembelajaran/video ini.');
        }

        $likes = Like::with('user')
            ->where("likeable_type", "App\Models\CourseLesson")
            ->where("likeable_id", $courseLesson->id)
            ->jsonPaginate();

        return LikeResource::collection($likes);
    }
}
