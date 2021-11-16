<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use App\Models\CaseReport;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class CaseReportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the caseReport can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CaseReport  $model
     * @return mixed
     */
    public function view(User $user, CaseReport $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }

    /**
     * Determine whether the caseReport can cancel the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CaseReport  $model
     * @return mixed
     */
    public function cancel(User $user, CaseReport $model)
    {
        if ($model->request_delete) {
            return Response::deny('laporan kasus ini sudah dalam permintaan membatalkan.');
        }
        if ($user->id != $model->user_id) {
            return  Response::deny(__('messages.cant'));
        }
        return Response::allow();
    }
}
