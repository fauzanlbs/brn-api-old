<?php

namespace App\Policies;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ForumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can crud the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Forum  $forum
     * @return mixed
     */
    public function crud(User $user, Forum $forum)
    {
        return $user->id === $forum->user_id
            ? Response::allow()
            : Response::deny('Anda bukan pemilik postingan ini.');
    }
}
