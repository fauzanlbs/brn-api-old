<?php

namespace App\Repositories\Car;

use App\Http\Requests\Car\CarRequest;
use App\Models\Car;

interface CarRepository
{
    /**
     * Create or update car
     *
     * @param int $id
     * @param CarRequest $carRequest
     *
     * @return Car
     */
    public function createOrUpdate(?int $id, CarRequest $carRequest): Car;
}
