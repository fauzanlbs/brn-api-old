<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\LikeResource;
use App\Models\Article;
use App\Models\Comment;
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
