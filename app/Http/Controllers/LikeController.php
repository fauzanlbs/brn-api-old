<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\Discussion;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;

/**
 * @group Like
 */
class LikeController extends Controller
{
    use ResponseAPI;


    /**
     * Menyukai diskusi.
     * @authenticated
     *
     * @group Forum Diskusi
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     *
     * @param Request $request
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menyukai diskusi.",
     * }
     */
    public function likeDiscussion(Request $request, Discussion $discussion)
    {
        $discussion->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai diskusi.');
    }


    /**
     * Batalkan menyukai diskusi.
     * @authenticated
     *
     * @group Forum Diskusi
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     *
     * @param Request $request
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil membatalkan menyukai diskusi.",
     * }
     */
    public function unlikeDiscussion(Request $request, Discussion $discussion)
    {
        $discussion->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai diskusi.');
    }


    /**
     * Menyukai artikel.
     * @authenticated
     *
     * @group Artikel
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param Request $request
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menyukai artikel.",
     * }
     */
    public function likeArticle(Request $request, Article $article)
    {
        $article->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai artikel.');
    }


    /**
     * Batalkan menyukai artikel.
     * @authenticated
     *
     * @group Artikel
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param Request $request
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil membatalkan menyukai artikel.",
     * }
     */
    public function unlikeArticle(Request $request, Article $article)
    {
        $article->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai artikel.');
    }


    /**
     * Menyukai kursus.
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Request $request
     * @param Course $course
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menyukai kursus.",
     * }
     */
    public function likeCourse(Request $request, Course $course)
    {
        $course->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai kursus.');
    }


    /**
     * Batalkan menyukai kursus.
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param Request $request
     * @param Course $course
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil membatalkan menyukai kursus.",
     * }
     */
    public function unlikeCourse(Request $request, Course $course)
    {
        $course->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai kursus.');
    }


    /**
     * Menyukai pembelajaran/video kursus.
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
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menyukai pembelejaran/video kursus.",
     * }
     */
    public function likeCourseLesson(Request $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum menyukai.');
        }

        $courseLesson->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai pembelejaran/video kursus.');
    }


    /**
     * Batalkan menyukai pembelajaran/video kursus.
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
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil membatalkan menyukai pembelejaran/video kursus.",
     * }
     */
    public function unlikeCourseLesson(Request $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum membatalkan menyukai.');
        }

        $courseLesson->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai pembelejaran/video kursus.');
    }


    /**
     * Menyukai komentar.
     * @authenticated
     *
     * @group Komentar
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param Request $request
     * @param Comment $comment
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menyukai komentar.",
     * }
     */
    public function likeComment(Request $request, Comment $comment)
    {
        $comment->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai artikel.');
    }


    /**
     * Batalkan menyukai komentar.
     * @authenticated
     *
     * @group Komentar
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param Request $request
     * @param Comment $comment
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil membatalkan menyukai komentar.",
     * }
     */
    public function unlikeComment(Request $request, Comment $comment)
    {
        $comment->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai artikel.');
    }
}
