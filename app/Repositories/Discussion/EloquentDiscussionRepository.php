<?php

namespace App\Repositories\Discussion;

use App\Http\Requests\Discussion\DiscussionCaseReportRequest;
use App\Http\Requests\Discussion\DiscussionRequest;
use App\Models\CaseReport;
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

    /**
     * Create or update discussion for case report
     *
     * @param int|null $id
     * @param DiscussionCaseReportRequest $discussionCaseReportRequest
     *
     * @return Discussion
     */
    public function createOrUpdateDiscussionCaseReport(?int $id, DiscussionCaseReportRequest $discussionCaseReportRequest): Discussion
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            // create Or update user car
            if (isset($id)) {
                $discussion = Discussion::find($id);
                $discussion->update($discussionCaseReportRequest->validated());
            } else {
                $caseReport = CaseReport::find($discussionCaseReportRequest['case_report_id'])->with(['user', 'car'])->first();

                $data['title'] = 'Diskusi laporan kasus #' . $caseReport->id;
                $data['description'] = 'Diskusi ini di kususkan untuk laporan kasus mobil dengan plat nomor ' .  $caseReport->car->police_number . ', dari ' . $caseReport->user->name;
                $data['user_id'] = $discussionCaseReportRequest->user()->id;
                $data['private'] = true;
                $data['featured'] = true;
                $data['case_report_id']  = $discussionCaseReportRequest['case_report_id'];

                $discussion = Discussion::create($data);

                if ($discussionCaseReportRequest['invite_user_ids']) {
                    $uids = $discussionCaseReportRequest['invite_user_ids'];
                    $uids[] += $discussionCaseReportRequest->user()->id;
                    $discussion->invitedUsers()->syncWithoutDetaching($uids);
                }
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
