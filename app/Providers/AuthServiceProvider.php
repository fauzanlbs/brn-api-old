<?php

namespace App\Providers;

use App\Models\AcademyAnnouncement;
use App\Models\AcademyTheory;
use App\Models\Forum;
use App\Policies\AcademyAnnouncementPolicy;
use App\Policies\AcademyTheoryPolicy;
use App\Policies\ForumPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        AcademyTheory::class => AcademyTheoryPolicy::class,
        AcademyAnnouncement::class => AcademyAnnouncementPolicy::class,
        Forum::class => ForumPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
