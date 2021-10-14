<?php

namespace App\Traits;

use App\Models\SocialAccount;

trait UserRegularFunction
{
    /**
     * Has Provider ?
     *
     * @param string $provider
     * @param string|null $providerId
     *
     * @return bool
     */
    public function hasProvider(string $provider, string $providerId = null): bool
    {
        return SocialAccount::where(
            $providerId
                ? [
                    'user_id' => $this->id,
                    'provider' => $provider,
                    'provider_id' => $providerId,
                ]
                : [
                    'user_id' => $this->id,
                    'provider' => $provider,
                ]
        )->get()->count() > 0;
    }
}
