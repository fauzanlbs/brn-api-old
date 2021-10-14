<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\CommentResource;
use App\Http\Resources\LikeResource;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Like;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Artikel
 */
class ArticleController extends Controller
{
    use ResponseAPI;


    /**
     * Mendapatkan list data artikel.
     * Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel
     *
     * @queryParam search string Mencari data artikel. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[title] string Penyortiran berdasarkan judul. Example: Berita hari ini
     * @queryParam filter[slug] string Penyortiran berdasarkan slug. Example: berita-hari-ini
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam filter[featured] int Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1. Example: 1
     *
     * @param Request $request
     * @return ArticleResource
     *
     * @responseFile storage/responses/article-resource.response.json
     */
    public function getArticles(Request $request)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'title', 'slug', 'featured',
        ];

        $articles = QueryBuilder::for(Article::class)
            ->published()
            ->limitChars('content', 100)
            ->with(['categories', 'author.roles'])
            ->withCount(['likes', 'views', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return ArticleResource::collection($articles);
    }


    /**
     * Mendapatkan list data artikel bedasarkan kategori.
     * Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel
     *
     * @queryParam search string Mencari data artikel. Example: Berita hari ini
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[title] string Penyortiran berdasarkan judul. Example: Berita hari ini
     * @queryParam filter[slug] string Penyortiran berdasarkan slug. Example: berita-hari-ini
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam filter[featured] int Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1. Example: 1
     *
     * @param Request $request
     * @param string $slug
     *
     * @return ArticleResource
     *
     * @responseFile storage/responses/article-resource.response.json
     */
    public function getArticleWhereCategories(Request $request, $slug)
    {
        $search = $request->query('search');

        $allowed = [
            'created_at', 'title', 'slug', 'featured',
        ];

        $articles = QueryBuilder::for(Article::class)
            ->withAnyCategories($slug)
            ->published()
            ->limitChars('content', 100)
            ->with(['categories', 'author.roles'])
            ->withCount(['likes', 'views', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        if ($articles->isEmpty()) {
            return $this->responseMessage('Tidak dapat menemukan artikel dengan slug kategori `' . $slug . '`', 404);
        }

        return ArticleResource::collection($articles);
    }


    /**
     * Mendapatkan detail data artikel.
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param Article $article
     * @return ArticleResource
     *
     * @responseFile storage/responses/single-article-resource.response.json
     */
    public function getArticleDetail(Article $article)
    {
        views($article)->record();

        $article->load(['categories', 'author.roles']);
        $article->loadCount(['likes', 'views', 'comments']);

        return new ArticleResource($article);
    }


    /**
     * Mendapatkan list data komentar artikel.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param Article $article
     * @return CommentResource
     *
     * @responseFile storage/responses/comment-resource.response.json
     */
    public function getArticleComments(Article $article)
    {
        $comments = Comment::with('commentator')
            ->withCount(['likes', 'replies'])
            ->where("commentable_type", "App\Models\Article")
            ->where("commentable_id", $article->id)
            ->jsonPaginate();

        return CommentResource::collection($comments);
    }


    /**
     * Mendapatkan list data user yang menyukai artikel.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam article int required valid id article. Example: 1
     *
     * @param Article $article
     * @return LikeResource
     *
     * @responseFile storage/responses/like-resource.response.json
     */
    public function getArticleLikes(Article $article)
    {
        $likes = Like::with('user')
            ->where("likeable_type", "App\Models\Article")
            ->where("likeable_id", $article->id)
            ->jsonPaginate();

        return LikeResource::collection($likes);
    }
}
