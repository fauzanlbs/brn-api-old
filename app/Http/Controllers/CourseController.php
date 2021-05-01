<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\LikeResource;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Like;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Kursus
 */
class CourseController extends Controller
{
    use ResponseAPI;

    /**
     * Mendapatkan list data kursus.
     * Dibagian ini Anda bisa mendapatkan list data kursus. note: sebelum Anda bisa melihat pembelajaran/video kursus Anda harus mengikut kursus nya terlebih dahulu
     *
     * @queryParam search string Mencari data kursus. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[name] string Penyortiran berdasarkan judul. Example: Marketing Di Social Media
     * @queryParam filter[description] string Penyortiran berdasarkan deskripsi. Example: Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     *
     * @return CourseResource
     *
     * @responseFile storage/responses/course-resource.response.json
     */
    public function getCourses(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'name', 'description',
        ];

        $courses = QueryBuilder::for(Course::class)
            ->enbaled()
            ->withCount(['lessons', 'likes', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CourseResource::collection($courses);
    }


    /**
     * Enroll kursus.
     * @authenticated
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Request $request
     * @param Course $article
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil enroll kursus.",
     * }
     */
    public function enrollCourse(Request $request, Course $course)
    {
        $course->students()->syncWithoutDetaching($request->user()->id);

        return $this->responseMessage('Berhasil enroll kursus.');
    }


    /**
     * Mendapatkan list data kursus yang diikuti.
     * Dibagian ini Anda bisa mendapatkan list data kurus yang diikuti.
     * @authenticated
     *
     * @queryParam search string Mencari data kurus yang diikuti. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[name] string Penyortiran berdasarkan judul. Example: Marketing Di Social Media
     * @queryParam filter[description] string Penyortiran berdasarkan deskripsi. Example: Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     *
     * @param Request $request
     *
     * @return CourseResource
     *
     * @responseFile storage/responses/course-resource.response.json
     */
    public function getMyCourses(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'name', 'description',
        ];

        $uid = $request->user()->id;

        $courses = QueryBuilder::for(Course::class)
            ->enbaled()
            ->whereHas('students', function ($query) use ($uid) {
                return $query->where('user_id', $uid);
            })
            ->withCount(['lessons', 'likes', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return CourseResource::collection($courses);
    }


    /**
     * Mendapatkan detail data kursus.
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Course $course
     * @return CourseResource
     *
     * @responseFile storage/responses/single-course-resource.response.json
     */
    public function getCourseDetail(Course $course)
    {
        $course->load(['user']);
        $course->loadCount(['lessons', 'likes', 'comments']);

        return new CourseResource($course);
    }


    /**
     * Mendapatkan list data komentar kursus.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Course $course
     * @return CommentResource
     *
     * @responseFile storage/responses/comment-resource.response.json
     */
    public function getCourseComments(Course $course)
    {
        $comments = Comment::with('commentator')
            ->withCount(['likes', 'replies'])
            ->where("commentable_type", "App\Models\Course")
            ->where("commentable_id", $course->id)
            ->jsonPaginate();

        return CommentResource::collection($comments);
    }


    /**
     * Mendapatkan list data user yang menyukai kursus.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Course $course
     * @return LikeResource
     *
     * @responseFile storage/responses/like-resource.response.json
     */
    public function getCourseLikes(Course $course)
    {
        $likes = Like::with('user')
            ->where("likeable_type", "App\Models\Course")
            ->where("likeable_id", $course->id)
            ->jsonPaginate();

        return LikeResource::collection($likes);
    }
}
