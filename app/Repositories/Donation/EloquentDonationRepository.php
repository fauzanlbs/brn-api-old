<?php

namespace App\Repositories\Donation;

use App\Http\Requests\Donation\DonationRequest;
use App\Models\Donation;
use App\Models\DonationUser;
use App\Repositories\Donation\DonationRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class EloquentDonationRepository implements DonationRepository
{
    /**
     * Create user Donation
     *
     * @param int $id
     * @param DonationRequest $DonationRequest
     *
     * @return Donation
     */
    public function  create(?int $id, DonationRequest $DonationRequest): Donation
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
