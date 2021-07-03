<?php

namespace App\Policies;

use App\Models\Agenda;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AgendaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agenda  $agenda
     * @return mixed
     */
    public function update(User $user, Agenda $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agenda  $agenda
     * @return mixed
     */
    public function delete(User $user, Agenda $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }
}
