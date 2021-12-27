<?php

namespace App\Repositories\Perpetrator;

use App\Models\Perpetrator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Perpetrator\PerpetratorRequest;
use App\Repositories\Perpetrator\PerpetratorRepository;

class EloquentPerpetratorRepository implements PerpetratorRepository
{
    /**
     * Create or update user Perpetrator
     *
     * @param int $id
     * @param PerpetratorRequest $perpetratorRequest
     *
     * @return Perpetrator
     */
    public function  createOrUpdate(?int $id, PerpetratorRequest $perpetratorRequest): Perpetrator
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            $perpetratorRequest = $perpetratorRequest->validated();

            if (isset($perpetratorRequest['photo'])) {
                $perpetratorRequest['profile_photo_path'] = $perpetratorRequest['photo']->storePublicly(
                    'perpetrator',
                    ['disk' => 'public']
                );
            }



            $perpetratorRequest['created_by_id'] = Auth::user()->id;
            // dd($perpetratorRequest);



            // create Or update user Perpetrator
            if (isset($id)) {
                $perpetrator = Perpetrator::find($id);
                $perpetrator->update($perpetratorRequest);
            } else {
                $perpetrator = Perpetrator::create($perpetratorRequest);
            };

            DB::commit();
            // End Commit of Transaction

            return $perpetrator;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }
}
