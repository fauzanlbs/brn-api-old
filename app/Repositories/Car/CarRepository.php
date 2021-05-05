<?php

namespace App\Repositories\Car;

use App\Http\Requests\Car\CarRequest;
use App\Models\Car;

interface CarRepository
{
    /**
     * Create or update User
     *
     * @param int $id
     * @param CarRequest $carRequest
     *
     * @return User
     */
    public function createOrUpdate(?int $id, CarRequest $carRequest): Car;
}
