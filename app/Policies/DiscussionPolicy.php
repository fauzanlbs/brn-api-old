<?php

namespace App\Policies;

use App\Models\Discussion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DiscussionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     *
     * @param  App\Models\User  $user
     * @param  \App\Models\Discussion  $model
     * @return mixed
     */
    public function update(User $user, Discussion $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  \App\Models\Discussion  $model
     * @return mixed
     */
    public function delete(User $user, Discussion $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }
}
