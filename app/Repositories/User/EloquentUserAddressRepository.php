<?php

namespace App\Repositories\User;

use App\Http\Requests\User\AddressRequest;

class EloquentUserAddressRepository implements UserAddressRepository
{

    /**
     * Get user by email
     *
     * @param string $email
     * @return array
     */
    public function explodeLocation(AddressRequest $r): array
    {
        $address = $r->validated();
        if ($address['location'] ?? false) {
            $latLong  = explode(",", $address['location']);
            unset($address['location']);
            $address['latitude'] = $latLong[0];
            $address['longitude'] = $latLong[1];
        }

        return $address;
    }
}
