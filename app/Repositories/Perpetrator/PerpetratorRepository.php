<?php

namespace App\Repositories\Perpetrator;

use App\Http\Requests\Perpetrator\PerpetratorRequest;
use App\Models\Perpetrator;

interface PerpetratorRepository
{
    /**
     * Create or update Perpetrator
     *
     * @param int $id
     * @param PerpetratorRequest $perpetratorRequest
     *
     * @return Car
     */
    public function createOrUpdate(?int $id, PerpetratorRequest $perpetratorRequest): Perpetrator;
}
