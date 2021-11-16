<?php

namespace App\Repositories\DonationUser;

use App\Http\Requests\Donation\DonationRequest;
use App\Models\DonationUser;

interface DonationUserRepository
{
    /**
     * Create or update Donation
     *
     * @param int $id
     * @param DonationRequest $DonationRequest
     *
     * @return Donations
     */
    public function create(?int $id, DonationRequest $donationRequest): DonationUser;
}
