<?php

namespace App\Repositories\Discussion;

use App\Http\Requests\Discussion\DiscussionRequest;
use App\Models\Discussion;
use Illuminate\Support\Facades\DB;

class EloquentDiscussionRepository implements DiscussionRepository
{
    /**
     * Create or update user discussion
     *
     * @param int $id
     * @param DiscussionRequest $discussionRequest
     *
     * @return Discussion
     */
    public function  createOrUpdate(?int $id, DiscussionRequest $discussionRequest): Discussion
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            // create Or update user car
            if (isset($id)) {
                $discussion = Discussion::find($id);
                $discussion->update($discussionRequest->validated());
            } else {
                $data = $discussionRequest->validated();
                $data['user_id'] = $discussionRequest->user()->id;
                $discussion = Discussion::create($data);
            };

            DB::commit();
            // End Commit of Transaction

            $discussion->load(['user', 'caseReport']);

            return $discussion;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }
}
