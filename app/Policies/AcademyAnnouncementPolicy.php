<?php

namespace App\Policies;

use App\Models\AcademyAnnouncement;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AcademyAnnouncementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can crud the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AcademyAnnouncement  $academyAnnouncement
     * @return mixed
     */
    public function crud(User $user, AcademyAnnouncement $academyAnnouncement)
    {
        return $user->id === $academyAnnouncement->user_id
            ? Response::allow()
            : Response::deny('Anda bukan pemilik pengumuman ini.');
    }
}
