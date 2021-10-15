<?php

namespace App\Repositories\DonationUser;

use App\Http\Requests\Donation\DonationRequest;
use App\Models\DonationUser;
use App\Repositories\DonationUser\DonationUserRepository;
use Illuminate\Support\Facades\DB;


class EloquentDonationUserRepository implements DonationUserRepository
{
    /**
     * Create user Donation
     *
     * @param int $id
     * @param DonationRequest $DonationRequest
     *
     * @return Donation
     */
    public function  create(?int $id, DonationRequest $DonationRequest): DonationUser
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            // create Donation
            $userDonation = DonationUser::create($DonationRequest->validated());

            DB::commit();
            // End Commit of Transaction


            return $userDonation;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }
}
