<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;

/**
 * @group Like
 */
class LikeController extends Controller
{
    use ResponseAPI;


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
     *  "message": "Berhasil menyukai artikel",
     * }
     */
    public function likeArticle(Request $request, Article $article)
    {
        $article->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai artikel');
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
     *  "message": "Berhasil membatalkan menyukai artikel",
     * }
     */
    public function unlikeArticle(Request $request, Article $article)
    {
        $article->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai artikel');
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
     *  "message": "Berhasil menyukai komentar",
     * }
     */
    public function likeComment(Request $request, Comment $comment)
    {
        $comment->like($request->user()->id);

        return $this->responseMessage('Berhasil menyukai artikel');
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
     *  "message": "Berhasil membatalkan menyukai komentar",
     * }
     */
    public function unlikeComment(Request $request, Comment $comment)
    {
        $comment->unlike($request->user()->id);

        return $this->responseMessage('Berhasil membatalkan menyukai artikel');
    }
}
