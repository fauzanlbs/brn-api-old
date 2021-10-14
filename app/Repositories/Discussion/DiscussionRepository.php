<?php

namespace App\Repositories\Discussion;

use App\Http\Requests\Discussion\DiscussionCaseReportRequest;
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


    /**
     * Create or update discussion for case report
     *
     * @param int $id
     * @param $discussionCaseReportRequest $discussionCaseReportRequest
     *
     * @return Disccusion
     */
    public function createOrUpdateDiscussionCaseReport(?int $id, DiscussionCaseReportRequest $discussionCaseReportRequest): Discussion;
}
