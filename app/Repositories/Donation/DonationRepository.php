<?php

namespace App\Repositories\Donation;

use App\Http\Requests\Donation\DonationRequest;
use App\Models\Donation;

interface DonationRepository
{
    /**
     * Create or update Donation
     *
     * @param int $id
     * @param DonationRequest $DonationRequest
     *
     * @return Donations
     */
    public function create(?int $id, DonationRequest $donationRequest): Donation;
}
