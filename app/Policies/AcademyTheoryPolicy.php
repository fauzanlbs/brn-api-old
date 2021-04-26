<?php

namespace App\Policies;

use App\Models\AcademyTheory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AcademyTheoryPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can crud the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AcademyTheory  $academyTheory
     * @return mixed
     */
    public function crud(User $user, AcademyTheory $academyTheory)
    {
        return $user->userable_id === $academyTheory->teacher_id && $user->userable_type === 'App\Models\Teacher'
            ? Response::allow()
            : Response::deny('Anda bukan pemilik postingan ini.');
    }
}
