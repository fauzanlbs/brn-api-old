<?php

namespace App\Repositories\Discussion;

use App\Http\Requests\Discussion\DiscussionRequest;
use App\Models\Discussion;

interface DiscussionRepository
{
    /**
     * Create or update discussion
     *
     * @param int $id
     * @param DiscussionRequest $discussionRequest
     *
     * @return Discussion
     */
    public function createOrUpdate(?int $id, DiscussionRequest $discussionRequest): Discussion;
}
