<?php

namespace App\Repositories\User;

use App\Http\Requests\User\AddressRequest;

interface UserAddressRepository
{
    /**
     * Explode location to lat,long. location: lat,long to latitude: lat, longitude: long.
     *
     * @param AddressRequest $address
     * @return array
     */
    public function explodeLocation(AddressRequest $address): array;
}
