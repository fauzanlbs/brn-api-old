<?php

namespace App\Http\Controllers;

use App\Http\Requests\Discussion\DiscussionRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\DiscussionResource;
use App\Http\Resources\LikeResource;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Like;
use App\Repositories\Discussion\EloquentDiscussionRepository;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Forum Diskusi
 */
class DiscussionController extends Controller
{
    use ResponseAPI;

    protected $eloquentDiscussion;

    /**
     * @param EloquentDiscussionRepository $eloquentDiscussion
     */
    public function __construct(EloquentDiscussionRepository $eloquentDiscussion)
    {
        $this->eloquentDiscussion = $eloquentDiscussion;
    }


    /**
     * Mendapatkan list data diskusi pengguna saat ini.
     * Dibagian ini Anda bisa mendapatkan list data diskusi. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.
     * @authenticated
     *
     * @queryParam search string Mencari data diskusi. Example: Mobil baru
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     * @queryParam sort string Menyortir data ( key_name / -key_name ), default -created_at. Example: created_at
     *
     * @queryParam filter[title] string Penyortiran berdasarkan judul. Example: Mobil baru
     * @queryParam filter[slug] string Penyortiran berdasarkan slug. Example: mobil-baru
     * @queryParam filter[created_at] string Penyortiran berdasarkan tanggal dibuat. Example: 2020-12-24
     * @queryParam filter[featured] int Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1. Example: 1
     *
     * @param Request $request
     * @return DiscussionResource
     *
     * @urlParam filterCaseReports string valid string case-reports. Defaults null. Example: case-reports
     *
     * @responseFile storage/responses/discussion-resource.response.json
     */
    public function getMyDiscussions(Request $request, ?string $filterCaseReports = null)
    {
        if (isset($filterCaseReports) && $filterCaseReports != 'case-reports') {
            return response()->json([
                'message' => 'Url filter tidak valid.'
            ], 400);
        }

        $search = $request->query('search');

        $allowed = [
            'created_at', 'title', 'slug', 'featured',
        ];

        $discussions = QueryBuilder::for(Discussion::class)
            ->when($filterCaseReports, function ($q) {
                return $q->caseReport();
            })
            ->where('user_id', $request->user()->id)
            ->limitChars('description', 100)
            ->with(['user.roles'])
            ->withCount(['likes', 'comments'])
            ->when($search, function ($q, $search) {
                return $q->search($search);
            })
            ->allowedFilters($allowed)
            ->allowedSorts($allowed)
            ->defaultSort('-' . $allowed[0])
            ->jsonPaginate();

        return DiscussionResource::collection($discussions);
    }


    /**
     * Mendapatkan detail data diskusi.
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     * @authenticated
     *
     * @param Discussion $discussion
     * @return DiscussionResource
     *
     * @responseFile storage/responses/single-discussion-resource.response.json
     */
    public function getDiscussionDetail(Discussion $discussion)
    {
        $discussion->load(['user.roles', 'caseReport']);
        $discussion->loadCount(['likes', 'comments']);

        return new DiscussionResource($discussion);
    }



    /**
     * Menambahkan diskusi pengguna saat ini.
     * Dibagian ini Anda bisa menambahkan diskusi pengguna saat ini.
     * @authenticated
     *
     * @param DiscussionRequest $request
     * @return DiscussionResource
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function store(DiscussionRequest $request)
    {
        $discussion = $this->eloquentDiscussion->createOrUpdate(NULL, $request);

        return (new DiscussionResource($discussion))->additional([
            'message' => __('messages.created', ['attr' => 'diskusi']),
        ]);
    }


    /**
     * Memperbaharui salah satu diskusi pengguna saat ini.
     * Dibagian ini Anda bisa memperbaharui salah satu diskusi pengguna saat ini.
     * @authenticated
     *
     * @param DiscussionRequest $request
     * @param \App\Models\Discussion $discussion
     * @return DiscussionResource
     *
     * @urlParam discussion int required valid id discussion. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function update(DiscussionRequest $request, Discussion $discussion)
    {
        $this->authorize('update', $discussion);

        $discussion = $this->eloquentDiscussion->createOrUpdate($discussion->id, $request);

        return (new DiscussionResource($discussion))->additional([
            'message' => __('messages.updated', ['attr' => 'diskusi']),
        ]);
    }

    /**
     * Menghapus salah satu diskusi pengguna saat ini.
     * Dibagian ini Anda bisa menghapus salah satu diskusi pengguna saat ini.
     * @authenticated
     *
     * @param Request $request
     * @param \App\Models\Discussion $discussion
     * @return DiscussionResource
     *
     * @urlParam discussion int required valid id discussion. Defaults to 'id'. Example: 1
     *
     * @responseFile storage/responses/only-message.response.json
     */
    public function destroy(Request $request, Discussion $discussion)
    {
        $this->authorize('delete', $discussion);

        $discussion->delete();

        return $this->responseMessage(__('messages.deleted', ['attr' => 'diskusi']));
    }


    /**
     * Mendapatkan list data komentar diskusi.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     *
     * @param Discussion $discussion
     * @return CommentResource
     *
     * @responseFile storage/responses/comment-resource.response.json
     */
    public function getDiscussionComments(Discussion $discussion)
    {
        $comments = Comment::with('commentator')
            ->withCount(['likes', 'replies'])
            ->where("commentable_type", "App\Models\Discussion")
            ->where("commentable_id", $discussion->id)
            ->jsonPaginate();

        return CommentResource::collection($comments);
    }


    /**
     * Mendapatkan list data user yang menyukai diskusi.
     *
     * @queryParam page[number] string Menyesuaikan URI paginator. Example: 1
     * @queryParam page[size] string Menyesuaikan jumlah data yang ditampilkan. Example: 2
     *
     * @urlParam discussion int required valid id discussion. Example: 1
     *
     * @param Discussion $discussion
     * @return LikeResource
     *
     * @responseFile storage/responses/like-resource.response.json
     */
    public function getDiscussionLikes(Discussion $discussion)
    {
        $likes = Like::with('user')
            ->where("likeable_type", "App\Models\Discussion")
            ->where("likeable_id", $discussion->id)
            ->jsonPaginate();

        return LikeResource::collection($likes);
    }
}
