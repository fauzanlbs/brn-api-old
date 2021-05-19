<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\LikeResource;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\Discussion;
use App\Models\Like;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;

/**
 * @group Komentar
 */
class CommentController extends Controller
{
    use ResponseAPI;


    /**
     * Mendapatkan list data balasan komentar.
     * @authenticated
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param Comment $comment
     * @return CommentResource
     *
     * @responseFile storage/responses/comment-resource.response.json
     */
    public function getCommentReplies(Comment $comment)
    {
        $comments = Comment::with('commentator')
            ->withCount(['likes', 'replies'])
            ->where("commentable_type", "App\Models\Comment")
            ->where("commentable_id", $comment->id)
            ->jsonPaginate();

        return CommentResource::collection($comments);
    }


    /**
     * Menambahan Balasan Komentar.
     * @authenticated
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param CommentRequest $request
     * @param Comment $comment
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menambahkan komentar.",
     * }
     */
    public function replyComment(CommentRequest $request, Comment $comment)
    {
        $comment->commentAsUser($request->user(), $request['comment']);

        return $this->responseMessage('Berhasil menambahkan komentar.');
    }


    /**
     * Menambahan komentar diskusi.
     * @authenticated
     *
     * @group Forum Diskusi
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     *
     * @param CommentRequest $request
     * @param Discussion $discussion
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menambahkan komentar.",
     * }
     */
    public function addCommentDiscussion(CommentRequest $request, Discussion $discussion)
    {
        if ($discussion->private && !$discussion->invitedUsers->contains($request->user()->id)) {
            return $this->responseMessage(__('messages.cant'), 401);
        }

        if ($discussion->finished_at != null) {
            return $this->responseMessage('Anda tidak bisa menambahkan komentar ke diskusi yang sudah di tandai sebagai selesai.');
        }

        $discussion->commentAsUser($request->user(), $request['comment']);

        return $this->responseMessage('Berhasil menambahkan komentar.');
    }


    /**
     * Menambahan komentar artikel.
     * @authenticated
     *
     * @group Artikel
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param CommentRequest $request
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menambahkan komentar.",
     * }
     */
    public function addCommentArticle(CommentRequest $request, Article $article)
    {
        $article->commentAsUser($request->user(), $request['comment']);

        return $this->responseMessage('Berhasil menambahkan komentar.');
    }


    /**
     * Menambahan komentar kursus.
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course int required valid id course. Example: 1
     *
     * @param CommentRequest $request
     * @param Course $course
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menambahkan komentar.",
     * }
     */
    public function addCommentCourse(CommentRequest $request, Course $course)
    {
        $course->commentAsUser($request->user(), $request['comment']);

        return $this->responseMessage('Berhasil menambahkan komentar.');
    }


    /**
     * Menambahan komentar pembelajaran/video kursus.
     * @authenticated
     *
     * @group Kursus
     *
     * @urlParam course int required valid id course. Example: 1
     * @urlParam courseLesson int required valid id courseLesson. Example: 1
     *
     * @param CommentRequest $request
     * @param Course $course
     * @param CourseLesson $courseLesson
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menambahkan komentar.",
     * }
     */
    public function addCommentCourseLesson(CommentRequest $request, Course $course, CourseLesson $courseLesson)
    {
        $uid = $request->user()->id;

        $alreadyEnrolled = $course->students()->where('user_id', $uid)->exists();
        if (!$alreadyEnrolled) {
            return $this->responseMessage('Anda harus mengikuti kursus dari pembelajaran/video ini terlebih dahulu sebelum menambahkan komentar.');
        }

        $courseLesson->commentAsUser($request->user(), $request['comment']);

        return $this->responseMessage('Berhasil menambahkan komentar.');
    }


    /**
     * Menghapus komentar.
     * @authenticated
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param Comment $comment
     *
     * @return \Illuminate\Http\Response
     *
     * @response {
     *  "message": "Berhasil menghapus komentar.",
     * }
     */
    public function deleteComment(Comment $comment)
    {
        if (auth()->id() != $comment->user_id) {
            return $this->responseMessage(__('messages.cant'), 422);
        }

        $comment->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'komentar']));
    }


    /**
     * Mendapatkan list data user yang menyukai komentar.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam comment int required valid id comment. Example: 1
     *
     * @param Comment $comment
     * @return LikeResource
     *
     * @responseFile storage/responses/like-resource.response.json
     */
    public function getCommentLikes(Comment $comment)
    {
        $likes = Like::with('user')
            ->where("likeable_type", "App\Models\Comment")
            ->where("likeable_id", $comment->id)
            ->jsonPaginate();

        return LikeResource::collection($likes);
    }
}
