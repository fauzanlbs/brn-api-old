<?php

namespace App\Policies;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the car can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Car  $model
     * @return mixed
     */
    public function update(User $user, Car $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }

    /**
     * Determine whether the car can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Car  $model
     * @return mixed
     */
    public function delete(User $user, Car $model)
    {
        return $user->id === $model->user_id
            ? Response::allow()
            : Response::deny(__('messages.cant'));
    }
}
